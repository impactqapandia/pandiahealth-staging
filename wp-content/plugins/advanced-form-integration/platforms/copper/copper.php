<?php

add_filter(
    'adfoin_action_providers',
    'adfoin_copper_actions',
    10,
    1
);
function adfoin_copper_actions( $actions )
{
    $actions['copper'] = array(
        'title' => __( 'Copper', 'advanced-form-integration' ),
        'tasks' => array(
        'add_contact' => __( 'Create New Company, Person, Deal', 'advanced-form-integration' ),
    ),
    );
    return $actions;
}

add_filter(
    'adfoin_settings_tabs',
    'adfoin_copper_settings_tab',
    10,
    1
);
function adfoin_copper_settings_tab( $providers )
{
    $providers['copper'] = __( 'Copper', 'advanced-form-integration' );
    return $providers;
}

add_action(
    'adfoin_settings_view',
    'adfoin_copper_settings_view',
    10,
    1
);
function adfoin_copper_settings_view( $current_tab )
{
    if ( $current_tab != 'copper' ) {
        return;
    }
    $nonce = wp_create_nonce( "adfoin_copper_settings" );
    $user_email = ( get_option( 'adfoin_copper_user_email' ) ? get_option( 'adfoin_copper_user_email' ) : "" );
    $access_token = ( get_option( 'adfoin_copper_access_token' ) ? get_option( 'adfoin_copper_access_token' ) : "" );
    ?>

    <form name="copper_save_form" action="<?php 
    echo  esc_url( admin_url( 'admin-post.php' ) ) ;
    ?>"
          method="post" class="container">

        <input type="hidden" name="action" value="adfoin_save_copper_api_key">
        <input type="hidden" name="_nonce" value="<?php 
    echo  $nonce ;
    ?>"/>

        <table class="form-table">
            <tr valign="top">
                <th scope="row"> <?php 
    _e( 'Admin Email', 'advanced-form-integration' );
    ?></th>
                <td>
                    <input type="text" name="adfoin_copper_user_email"
                           value="<?php 
    echo  $user_email ;
    ?>" placeholder="<?php 
    _e( 'Please enter User Email', 'advanced-form-integration' );
    ?>"
                           class="regular-text"/>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"> <?php 
    _e( 'API Key', 'advanced-form-integration' );
    ?></th>
                <td>
                    <input type="text" name="adfoin_copper_access_token"
                           value="<?php 
    echo  $access_token ;
    ?>" placeholder="<?php 
    _e( 'Please enter Access Token', 'advanced-form-integration' );
    ?>"
                           class="regular-text"/>
                           <p class="description" id="code-description"><?php 
    _e( 'Please go to Settings > Integrations > API Keys', 'advanced-form-integration' );
    ?></a></p>
                </td>
            </tr>
        </table>
        <?php 
    submit_button();
    ?>
    </form>

    <?php 
}

add_action(
    'admin_post_adfoin_save_copper_api_key',
    'adfoin_save_copper_api_key',
    10,
    0
);
function adfoin_save_copper_api_key()
{
    // Security Check
    if ( !wp_verify_nonce( $_POST['_nonce'], 'adfoin_copper_settings' ) ) {
        die( __( 'Security check Failed', 'advanced-form-integration' ) );
    }
    $user_email = sanitize_text_field( $_POST["adfoin_copper_user_email"] );
    $access_token = sanitize_text_field( $_POST["adfoin_copper_access_token"] );
    // Save tokens
    update_option( "adfoin_copper_user_email", $user_email );
    update_option( "adfoin_copper_access_token", $access_token );
    advanced_form_integration_redirect( "admin.php?page=advanced-form-integration-settings&tab=copper" );
}

add_action(
    'adfoin_add_js_fields',
    'adfoin_copper_js_fields',
    10,
    1
);
function adfoin_copper_js_fields( $field_data )
{
}

add_action( 'adfoin_action_fields', 'adfoin_copper_action_fields' );
function adfoin_copper_action_fields()
{
    ?>
    <script type="text/template" id="copper-action-template">
        <table class="form-table">
            <tr valign="top" v-if="action.task == 'add_contact'">
                <th scope="row">
                    <?php 
    esc_attr_e( 'Contact Fields', 'advanced-form-integration' );
    ?>
                </th>
                <td scope="row">

                </td>
            </tr>

            <tr valign="top" class="alternate" v-if="action.task == 'add_contact'">
                <td scope="row-title">
                    <label for="tablecell">
                        <?php 
    esc_attr_e( 'Owner', 'advanced-form-integration' );
    ?>
                    </label>
                </td>
                <td>
                    <select name="fieldData[owner]" v-model="fielddata.owner">
                        <option value=""> <?php 
    _e( 'Select Owner...', 'advanced-form-integration' );
    ?> </option>
                        <option v-for="(item, index) in fielddata.ownerList" :value="index" > {{item}}  </option>
                    </select>
                    <div class="spinner" v-bind:class="{'is-active': ownerLoading}" style="float:none;width:auto;height:auto;padding:10px 0 10px 50px;background-position:20px 0;"></div>
                </td>
            </tr>

            <editable-field v-for="field in fields" v-bind:key="field.value" v-bind:field="field" v-bind:trigger="trigger" v-bind:action="action" v-bind:fielddata="fielddata"></editable-field>

            <?php 
    
    if ( adfoin_fs()->is_not_paying() ) {
        ?>
                    <tr valign="top" v-if="action.task == 'add_contact'">
                        <th scope="row">
                            <?php 
        esc_attr_e( 'Go Pro', 'advanced-form-integration' );
        ?>
                        </th>
                        <td scope="row">
                            <span><?php 
        printf( __( 'To unlock custom fields and tags consider <a href="%s">upgrading to Pro</a>.', 'advanced-form-integration' ), admin_url( 'admin.php?page=advanced-form-integration-settings-pricing' ) );
        ?></span>
                        </td>
                    </tr>
                    <?php 
    }
    
    ?>

        </table>
    </script>
    <?php 
}

function adfoin_copper_get_headers()
{
    $headers = array(
        'X-PW-AccessToken' => '',
        'X-PW-Application' => 'developer_api',
        'X-PW-UserEmail'   => '',
        'Content-Type'     => 'application/json',
    );
    $headers['X-PW-UserEmail'] = ( get_option( 'adfoin_copper_user_email' ) ? get_option( 'adfoin_copper_user_email' ) : '' );
    $headers['X-PW-AccessToken'] = ( get_option( 'adfoin_copper_access_token' ) ? get_option( 'adfoin_copper_access_token' ) : '' );
    return $headers;
}

add_action(
    'wp_ajax_adfoin_get_copper_owner_list',
    'adfoin_get_copper_owner_list',
    10,
    0
);
/*
 * Get Copper Owner list
 */
function adfoin_get_copper_owner_list()
{
    // Security Check
    if ( !wp_verify_nonce( $_POST['_nonce'], 'advanced-form-integration' ) ) {
        die( __( 'Security check Failed', 'advanced-form-integration' ) );
    }
    $headers = adfoin_copper_get_headers();
    if ( !$headers['X-PW-UserEmail'] || !$headers['X-PW-AccessToken'] ) {
        return;
    }
    $url = "https://api.prosperworks.com/developer_api/v1/users";
    $args = array(
        "headers" => $headers,
    );
    $data = wp_remote_get( $url, $args );
    if ( is_wp_error( $data ) ) {
        wp_snd_json_error();
    }
    $body = json_decode( wp_remote_retrieve_body( $data ) );
    $users = wp_list_pluck( $body, 'name', 'id' );
    wp_send_json_success( $users );
}

function adfoin_copper_get_contact_types()
{
    $headers = adfoin_copper_get_headers();
    if ( !$headers['X-PW-UserEmail'] || !$headers['X-PW-AccessToken'] ) {
        return;
    }
    $url = "https://api.prosperworks.com/developer_api/v1/contact_types";
    $args = array(
        'headers' => $headers,
    );
    $data = wp_remote_get( $url, $args );
    if ( is_wp_error( $data ) ) {
        return array();
    }
    $types = json_decode( wp_remote_retrieve_body( $data ) );
    return $types;
}

function adfoin_copper_get_pipelines()
{
    $headers = adfoin_copper_get_headers();
    if ( !$headers['X-PW-UserEmail'] || !$headers['X-PW-AccessToken'] ) {
        return;
    }
    $url = "https://api.prosperworks.com/developer_api/v1/pipelines";
    $args = array(
        'headers' => $headers,
    );
    $data = wp_remote_get( $url, $args );
    if ( is_wp_error( $data ) ) {
        return;
    }
    $pipelines = json_decode( wp_remote_retrieve_body( $data ) );
    $pipeline_string = array();
    foreach ( $pipelines as $pipeline ) {
        foreach ( $pipeline->stages as $stage ) {
            $pipeline_string[] = $pipeline->name . '/' . $stage->name . ': ' . $pipeline->id . '_' . $stage->id;
        }
    }
    return implode( ', ', $pipeline_string );
}

function adfoin_copper_get_sources()
{
    $headers = adfoin_copper_get_headers();
    if ( !$headers['X-PW-UserEmail'] || !$headers['X-PW-AccessToken'] ) {
        return;
    }
    $url = "https://api.prosperworks.com/developer_api/v1/customer_sources";
    $args = array(
        'headers' => $headers,
    );
    $data = wp_remote_get( $url, $args );
    if ( is_wp_error( $data ) ) {
        return;
    }
    $sources = json_decode( wp_remote_retrieve_body( $data ) );
    $source_string = array();
    foreach ( $sources as $source ) {
        $source_string[] = $source->name . ': ' . $source->id;
    }
    return implode( ', ', $source_string );
}

add_action(
    'wp_ajax_adfoin_get_copper_all_fields',
    'adfoin_get_copper_all_fields',
    10,
    0
);
/*
 * Get Copper fields
 */
function adfoin_get_copper_all_fields()
{
    // Security Check
    if ( !wp_verify_nonce( $_POST['_nonce'], 'advanced-form-integration' ) ) {
        die( __( 'Security check Failed', 'advanced-form-integration' ) );
    }
    $headers = adfoin_copper_get_headers();
    if ( !$headers['X-PW-UserEmail'] || !$headers['X-PW-AccessToken'] ) {
        return;
    }
    $contact_types = adfoin_copper_get_contact_types();
    $pipelines = adfoin_copper_get_pipelines();
    $sources = adfoin_copper_get_sources();
    $ct_description = array();
    foreach ( $contact_types as $contact_type ) {
        $ct_description[] = $contact_type->name . ': ' . $contact_type->id;
    }
    $com_fields = array(
        array(
        'key'         => 'com_name',
        'value'       => 'Name [Company]',
        'description' => 'Required only for creating a Company',
    ),
        array(
        'key'         => 'com_workphone',
        'value'       => 'Work Phone [Company]',
        'description' => '',
    ),
        array(
        'key'         => 'com_mobilephone',
        'value'       => 'Mobile Phone [Company]',
        'description' => '',
    ),
        array(
        'key'         => 'com_homephone',
        'value'       => 'Home Phone [Company]',
        'description' => '',
    ),
        array(
        'key'         => 'com_workwebsite',
        'value'       => 'Work Website [Company]',
        'description' => '',
    ),
        array(
        'key'         => 'com_emaildomain',
        'value'       => 'Email Domain [Company]',
        'description' => '',
    ),
        array(
        'key'         => 'com_linkedin',
        'value'       => 'LinkedIn [Company]',
        'description' => '',
    ),
        array(
        'key'         => 'com_twitter',
        'value'       => 'Twitter [Company]',
        'description' => '',
    ),
        array(
        'key'         => 'com_facebook',
        'value'       => 'Facebook [Company]',
        'description' => '',
    ),
        array(
        'key'         => 'com_youtube',
        'value'       => 'Youtube [Company]',
        'description' => '',
    ),
        array(
        'key'         => 'com_street',
        'value'       => 'Street [Company]',
        'description' => '',
    ),
        array(
        'key'         => 'com_city',
        'value'       => 'City [Company]',
        'description' => '',
    ),
        array(
        'key'         => 'com_state',
        'value'       => 'State [Company]',
        'description' => '',
    ),
        array(
        'key'         => 'com_zip',
        'value'       => 'Zip [Company]',
        'description' => '',
    ),
        array(
        'key'         => 'com_country',
        'value'       => 'Country [Company]',
        'description' => '',
    ),
        array(
        'key'         => 'com_description',
        'value'       => 'Description [Company]',
        'description' => '',
    ),
        array(
        'key'         => 'com_contacttype',
        'value'       => 'Contact Type ID [Company]',
        'description' => implode( ', ', $ct_description ),
    )
    );
    $per_fields = array(
        array(
        'key'         => 'per_name',
        'value'       => 'Name [Person]',
        'description' => 'Required only for creating a Person',
    ),
        array(
        'key'         => 'per_title',
        'value'       => 'Title [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_workphone',
        'value'       => 'Work Phone [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_mobilephone',
        'value'       => 'Mobile Phone [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_homephone',
        'value'       => 'Home Phone [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_workemail',
        'value'       => 'Work Email [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_personalemail',
        'value'       => 'Personal Email [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_workwebsite',
        'value'       => 'Work Website [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_personalwebsite',
        'value'       => 'Personal Website [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_linkedin',
        'value'       => 'LinkedIn [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_twitter',
        'value'       => 'Twitter [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_facebook',
        'value'       => 'Facebook [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_youtube',
        'value'       => 'Youtube [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_street',
        'value'       => 'Street [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_city',
        'value'       => 'City [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_state',
        'value'       => 'State [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_zip',
        'value'       => 'Zip [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_country',
        'value'       => 'Country [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_description',
        'value'       => 'Description [Person]',
        'description' => '',
    ),
        array(
        'key'         => 'per_contacttype',
        'value'       => 'Contact Type ID [Person]',
        'description' => implode( ', ', $ct_description ),
    )
    );
    $deal_fields = array(
        array(
        'key'         => 'deal_name',
        'value'       => 'Name [Deal]',
        'description' => 'Required only for creating a Deal',
    ),
        array(
        'key'         => 'deal_closedate',
        'value'       => 'Close Date [Deal]',
        'description' => '',
    ),
        array(
        'key'         => 'deal_description',
        'value'       => 'Description [Deal]',
        'description' => '',
    ),
        array(
        'key'         => 'deal_pipeline',
        'value'       => 'Pipeline_Stage ID [Deal]',
        'description' => $pipelines,
    ),
        array(
        'key'         => 'deal_source',
        'value'       => 'Source ID [Deal]',
        'description' => $sources,
    ),
        array(
        'key'         => 'deal_priority',
        'value'       => 'Priority [Deal]',
        'description' => 'None, Low, Medium, High',
    ),
        array(
        'key'         => 'deal_value',
        'value'       => 'Value [Deal]',
        'description' => '',
    ),
        array(
        'key'         => 'deal_winpercentage',
        'value'       => 'Win Percentage [Deal]',
        'description' => '',
    )
    );
    $final_data = array_merge( $com_fields, $per_fields, $deal_fields );
    wp_send_json_success( $final_data );
}

/*
 * Handles sending data to Copper API
 */
function adfoin_copper_send_data( $record, $posted_data )
{
    $headers = adfoin_copper_get_headers();
    if ( !$headers['X-PW-UserEmail'] || !$headers['X-PW-AccessToken'] ) {
        return;
    }
    $record_data = json_decode( $record["data"], true );
    if ( array_key_exists( "cl", $record_data["action_data"] ) ) {
        if ( $record_data["action_data"]["cl"]["active"] == "yes" ) {
            if ( !adfoin_match_conditional_logic( $record_data["action_data"]["cl"], $posted_data ) ) {
                return;
            }
        }
    }
    $data = $record_data["field_data"];
    $task = $record["task"];
    $owner = $data["owner"];
    $com_id = "";
    $per_id = "";
    $deal_id = "";
    
    if ( $task == "add_contact" ) {
        $holder = array();
        $com_data = array();
        $per_data = array();
        $deal_data = array();
        foreach ( $data as $key => $value ) {
            $holder[$key] = adfoin_get_parsed_values( $data[$key], $posted_data );
        }
        foreach ( $holder as $key => $value ) {
            
            if ( substr( $key, 0, 4 ) == 'com_' && $value ) {
                $key = substr( $key, 4 );
                $com_data[$key] = $value;
            }
            
            
            if ( substr( $key, 0, 4 ) == 'per_' && $value ) {
                $key = substr( $key, 4 );
                $per_data[$key] = $value;
            }
            
            
            if ( substr( $key, 0, 5 ) == 'deal_' && $value ) {
                $key = substr( $key, 5 );
                $deal_data[$key] = $value;
            }
        
        }
        
        if ( $com_data['name'] ) {
            $com_url = "https://api.prosperworks.com/developer_api/v1/companies";
            $com_body = array(
                'name'          => $com_data['name'],
                'phone_numbers' => array(),
                'address'       => array(),
                'websites'      => array(),
                'socials'       => array(),
            );
            if ( $owner ) {
                $com_body['assignee_id'] = $owner;
            }
            if ( isset( $com_data['description'] ) && $com_data['description'] ) {
                $com_body['details'] = $com_data['description'];
            }
            if ( isset( $com_data['contacttype'] ) && $com_data['contacttype'] ) {
                $com_body['contact_type_id'] = $com_data['contacttype'];
            }
            if ( isset( $com_data['street'] ) && $com_data['street'] ) {
                $com_body['address']['street'] = $com_data['street'];
            }
            if ( isset( $com_data['city'] ) && $com_data['city'] ) {
                $com_body['address']['city'] = $com_data['city'];
            }
            if ( isset( $com_data['state'] ) && $com_data['state'] ) {
                $com_body['address']['state'] = $com_data['state'];
            }
            if ( isset( $com_data['zip'] ) && $com_data['zip'] ) {
                $com_body['address']['zip'] = $com_data['zip'];
            }
            if ( isset( $com_data['country'] ) && $com_data['country'] ) {
                $com_body['address']['country'] = $com_data['country'];
            }
            if ( isset( $com_data['workphone'] ) && $com_data['workphone'] ) {
                $com_body['phone_numbers'][] = array(
                    'number'   => $com_data['workphone'],
                    'category' => 'work',
                );
            }
            if ( isset( $com_data['mobilephone'] ) && $com_data['mobilephone'] ) {
                $com_body['phone_numbers'][] = array(
                    'number'   => $com_data['mobilephone'],
                    'category' => 'mobile',
                );
            }
            if ( isset( $com_data['homephone'] ) && $com_data['homephone'] ) {
                $com_body['phone_numbers'][] = array(
                    'number'   => $com_data['homephone'],
                    'category' => 'home',
                );
            }
            if ( isset( $com_data['workwebsite'] ) && $com_data['workwebsite'] ) {
                $com_body['websites'][] = array(
                    'url'      => $com_data['workwebsite'],
                    'category' => 'work',
                );
            }
            if ( isset( $com_data['emaildomain'] ) && $com_data['emaildomain'] ) {
                $com_body['email_domain'] = $com_data['emaildomain'];
            }
            if ( isset( $com_data['linkedin'] ) && $com_data['linkedin'] ) {
                $com_body['socials'][] = array(
                    'url'      => $com_data['linkedin'],
                    'category' => 'linkedin',
                );
            }
            if ( isset( $com_data['twitter'] ) && $com_data['twitter'] ) {
                $com_body['socials'][] = array(
                    'url'      => $com_data['twitter'],
                    'category' => 'twitter',
                );
            }
            if ( isset( $com_data['facebook'] ) && $com_data['facebook'] ) {
                $com_body['socials'][] = array(
                    'url'      => $com_data['facebook'],
                    'category' => 'facebook',
                );
            }
            if ( isset( $com_data['youtube'] ) && $com_data['youtube'] ) {
                $com_body['socials'][] = array(
                    'url'      => $com_data['youtube'],
                    'category' => 'youtube',
                );
            }
            $com_args = array(
                "headers" => $headers,
                "body"    => json_encode( $com_body ),
            );
            $com_response = wp_remote_post( $com_url, $com_args );
            adfoin_add_to_log(
                $com_response,
                $com_url,
                $com_args,
                $record
            );
            $com_body = json_decode( wp_remote_retrieve_body( $com_response ) );
            if ( $com_response['response']['code'] == 200 ) {
                $com_id = $com_body->id;
            }
        }
        
        
        if ( $per_data['name'] ) {
            $per_url = "https://api.prosperworks.com/developer_api/v1/people";
            $per_body = array(
                'name'          => $per_data['name'],
                'phone_numbers' => array(),
                'emails'        => array(),
                'websites'      => array(),
                'address'       => array(),
                'socials'       => array(),
            );
            if ( $owner ) {
                $per_body['assignee_id'] = $owner;
            }
            if ( isset( $per_data['title'] ) && $per_data['title'] ) {
                $per_body['title'] = $per_data['title'];
            }
            if ( isset( $per_data['description'] ) && $per_data['description'] ) {
                $per_body['details'] = $per_data['description'];
            }
            if ( isset( $per_data['contacttype'] ) && $per_data['contacttype'] ) {
                $per_body['contact_type_id'] = $per_data['contacttype'];
            }
            if ( isset( $per_data['street'] ) && $per_data['street'] ) {
                $per_body['address']['street'] = $per_data['street'];
            }
            if ( isset( $per_data['city'] ) && $per_data['city'] ) {
                $per_body['address']['city'] = $per_data['city'];
            }
            if ( isset( $per_data['state'] ) && $per_data['state'] ) {
                $per_body['address']['state'] = $per_data['state'];
            }
            if ( isset( $per_data['zip'] ) && $per_data['zip'] ) {
                $per_body['address']['zip'] = $per_data['zip'];
            }
            if ( isset( $per_data['country'] ) && $per_data['country'] ) {
                $per_body['address']['country'] = $per_data['country'];
            }
            if ( isset( $per_data['workphone'] ) && $per_data['workphone'] ) {
                $per_body['phone_numbers'][] = array(
                    'number'   => $per_data['workphone'],
                    'category' => 'work',
                );
            }
            if ( isset( $per_data['mobilephone'] ) && $per_data['mobilephone'] ) {
                $per_body['phone_numbers'][] = array(
                    'number'   => $per_data['mobilephone'],
                    'category' => 'mobile',
                );
            }
            if ( isset( $per_data['homephone'] ) && $per_data['homephone'] ) {
                $per_body['phone_numbers'][] = array(
                    'number'   => $per_data['homephone'],
                    'category' => 'home',
                );
            }
            if ( isset( $per_data['workemail'] ) && $per_data['workemail'] ) {
                $per_body['emails'][] = array(
                    'email'    => $per_data['workemail'],
                    'category' => 'work',
                );
            }
            if ( isset( $per_data['personalemail'] ) && $per_data['personalemail'] ) {
                $per_body['emails'][] = array(
                    'email'    => $per_data['personalemail'],
                    'category' => 'personal',
                );
            }
            if ( isset( $per_data['workwebsite'] ) && $per_data['workwebsite'] ) {
                $per_body['websites'][] = array(
                    'url'      => $per_data['workwebsite'],
                    'category' => 'work',
                );
            }
            if ( isset( $per_data['personalwebsite'] ) && $per_data['personalwebsite'] ) {
                $per_body['websites'][] = array(
                    'url'      => $per_data['personalwebsite'],
                    'category' => 'personal',
                );
            }
            if ( isset( $per_data['linkedin'] ) && $per_data['linkedin'] ) {
                $per_body['socials'][] = array(
                    'url'      => $per_data['linkedin'],
                    'category' => 'linkedin',
                );
            }
            if ( isset( $per_data['twitter'] ) && $per_data['twitter'] ) {
                $per_body['socials'][] = array(
                    'url'      => $per_data['twitter'],
                    'category' => 'twitter',
                );
            }
            if ( isset( $per_data['facebook'] ) && $per_data['facebook'] ) {
                $per_body['socials'][] = array(
                    'url'      => $per_data['facebook'],
                    'category' => 'facebook',
                );
            }
            if ( isset( $per_data['youtube'] ) && $per_data['youtube'] ) {
                $per_body['socials'][] = array(
                    'url'      => $per_data['youtube'],
                    'category' => 'youtube',
                );
            }
            if ( $com_id ) {
                $per_body['company_id'] = $com_id;
            }
            $per_args = array(
                "headers" => $headers,
                "body"    => json_encode( $per_body ),
            );
            $per_response = wp_remote_post( $per_url, $per_args );
            adfoin_add_to_log(
                $per_response,
                $per_url,
                $per_args,
                $record
            );
            $per_body = json_decode( wp_remote_retrieve_body( $per_response ) );
            if ( $per_response['response']['code'] == 200 ) {
                $per_id = $per_body->id;
            }
        }
        
        
        if ( $deal_data['name'] ) {
            $deal_url = "https://api.prosperworks.com/developer_api/v1/opportunities";
            $deal_body = array(
                'name' => $deal_data['name'],
            );
            if ( $owner ) {
                $deal_body['assignee_id'] = $owner;
            }
            if ( isset( $deal_data['closedate'] ) && $deal_data['closedate'] ) {
                $deal_body['close_date'] = $deal_data['closedate'];
            }
            if ( isset( $deal_data['description'] ) && $deal_data['description'] ) {
                $deal_body['details'] = $deal_data['description'];
            }
            if ( isset( $deal_data['source'] ) && $deal_data['source'] ) {
                $deal_body['customer_source_id'] = $deal_data['source'];
            }
            if ( isset( $deal_data['priority'] ) && $deal_data['priority'] ) {
                $deal_body['priority'] = $deal_data['priority'];
            }
            if ( isset( $deal_data['value'] ) && $deal_data['value'] ) {
                $deal_body['monetary_value'] = $deal_data['value'];
            }
            if ( isset( $deal_data['winpercentage'] ) && $deal_data['winpercentage'] ) {
                $deal_body['win_probability'] = $deal_data['winpercentage'];
            }
            
            if ( isset( $deal_data['pipeline'] ) && $deal_data['pipeline'] ) {
                $pipeline_stage = explode( '_', $deal_data['pipeline'] );
                
                if ( count( $pipeline_stage ) == 2 ) {
                    $deal_body['pipeline_id'] = $pipeline_stage[0];
                    $deal_body['pipeline_stage_id'] = $pipeline_stage[1];
                }
            
            }
            
            if ( $com_id ) {
                $deal_body['company_id'] = $com_id;
            }
            if ( $per_id ) {
                $deal_body['primary_contact_id'] = $per_id;
            }
            $deal_args = array(
                "headers" => $headers,
                "body"    => json_encode( $deal_body ),
            );
            $deal_response = wp_remote_post( $deal_url, $deal_args );
            adfoin_add_to_log(
                $deal_response,
                $deal_url,
                $deal_args,
                $record
            );
            $deal_body = json_decode( wp_remote_retrieve_body( $deal_response ) );
            if ( $deal_response['response']['code'] == 200 ) {
                $deal_id = $deal_body->id;
            }
        }
    
    }
    
    return;
}
