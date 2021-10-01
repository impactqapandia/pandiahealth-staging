<?php

add_filter( 'adfoin_action_providers', 'adfoin_asana_actions', 10, 1 );

function adfoin_asana_actions( $actions ) {

    $actions['asana'] = array(
        'title' => __( 'Asana', 'advanced-form-integration' ),
        'tasks' => array(
            'create_task' => __( 'Create Task', 'advanced-form-integration' )
        )
    );

    return $actions;
}

add_filter( 'adfoin_settings_tabs', 'adfoin_asana_settings_tab', 10, 1 );

function adfoin_asana_settings_tab( $providers ) {
    $providers['asana'] = __( 'Asana', 'advanced-form-integration' );

    return $providers;
}

add_action( 'adfoin_settings_view', 'adfoin_asana_settings_view', 10, 1 );

function adfoin_asana_settings_view( $current_tab ) {
    if( $current_tab != 'asana' ) {
        return;
    }

    $nonce     = wp_create_nonce( "adfoin_asana_settings" );
    $api_token = get_option( 'adfoin_asana_access_token' ) ? get_option( 'adfoin_asana_access_token' ) : "";
    ?>

    <form name="asana_save_form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>"
          method="post" class="container">

        <input type="hidden" name="action" value="adfoin_save_asana_access_token">
        <input type="hidden" name="_nonce" value="<?php echo $nonce ?>"/>

        <table class="form-table">
            <tr valign="top">
                <th scope="row"> <?php _e( 'Personal Access Token', 'advanced-form-integration' ); ?></th>
                <td>
                    <input type="text" name="adfoin_asana_access_token"
                           value="<?php echo $api_token; ?>" placeholder="<?php _e( 'Please enter Personal Access Token', 'advanced-form-integration' ); ?>"
                           class="regular-text"/>
                    <p>
                        To find the Personal Access Token go to <a target="_blank" rel="noopener noreferrer" href="https://app.asana.com/0/developer-console">developer console</a> and create new access token.
                    </p>
                </td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>

    <?php
}

add_action( 'admin_post_adfoin_save_asana_access_token', 'adfoin_save_asana_access_token', 10, 0 );

function adfoin_save_asana_access_token() {
    // Security Check
    if (! wp_verify_nonce( $_POST['_nonce'], 'adfoin_asana_settings' ) ) {
        die( __( 'Security check Failed', 'advanced-form-integration' ) );
    }

    $api_token   = sanitize_text_field( $_POST["adfoin_asana_access_token"] );

    // Save tokens
    update_option( "adfoin_asana_access_token", $api_token );

    advanced_form_integration_redirect( "admin.php?page=advanced-form-integration-settings&tab=asana" );
}

add_action( 'adfoin_action_fields', 'adfoin_asana_action_fields' );

function adfoin_asana_action_fields() {
    ?>

    <script type="text/template" id="asana-action-template">
        <table class="form-table">
            <tr valign="top" v-if="action.task == 'create_task'">
                <th scope="row">
                    <?php esc_attr_e( 'Task Fields', 'advanced-form-integration' ); ?>
                </th>
                <td scope="row">

                </td>
            </tr>
            <tr class="alternate" v-if="action.task == 'create_task'">
                <td>
                    <label for="tablecell">
                        <?php esc_attr_e( 'Workspace', 'advanced-form-integration' ); ?>
                    </label>
                </td>

                <td>
                    <select name="fieldData[workspaceId]" v-model="fielddata.workspaceId" required="true" @change="getProjects">
                        <option value=""><?php _e( 'Select...', 'advanced-form-integration' ); ?></option>
                        <option v-for="(item, index) in fielddata.workspaces" :value="index" > {{item}}  </option>
                    </select>
                    <div class="spinner" v-bind:class="{'is-active': workspaceLoading}" style="float:none;width:auto;height:auto;padding:10px 0 10px 50px;background-position:20px 0;"></div>
                </td>
            </tr>

            <tr class="alternate" v-if="action.task == 'create_task'">
                <td>
                    <label for="tablecell">
                        <?php esc_attr_e( 'Project', 'advanced-form-integration' ); ?>
                    </label>
                </td>

                <td>
                    <select name="fieldData[projectId]" v-model="fielddata.projectId" required="true" @change="getSections">
                        <option value=""><?php _e( 'Select...', 'advanced-form-integration' ); ?></option>
                        <option v-for="(item, index) in fielddata.projects" :value="index" > {{item}}  </option>
                    </select>
                    <div class="spinner" v-bind:class="{'is-active': projectLoading}" style="float:none;width:auto;height:auto;padding:10px 0 10px 50px;background-position:20px 0;"></div>
                </td>
            </tr>

            <tr class="alternate" v-if="action.task == 'create_task'">
                <td>
                    <label for="tablecell">
                        <?php esc_attr_e( 'Section', 'advanced-form-integration' ); ?>
                    </label>
                </td>

                <td>
                    <select name="fieldData[sectionId]" v-model="fielddata.sectionId">
                        <option value=""><?php _e( 'Select...', 'advanced-form-integration' ); ?></option>
                        <option v-for="(item, index) in fielddata.sections" :value="index" > {{item}}  </option>
                    </select>
                    <div class="spinner" v-bind:class="{'is-active': sectionLoading}" style="float:none;width:auto;height:auto;padding:10px 0 10px 50px;background-position:20px 0;"></div>
                </td>
            </tr>

            <tr class="alternate" v-if="action.task == 'create_task'">
                <td>
                    <label for="tablecell">
                        <?php esc_attr_e( 'Assignee', 'advanced-form-integration' ); ?>
                    </label>
                </td>

                <td>
                    <select name="fieldData[userId]" v-model="fielddata.userId">
                        <option value=""><?php _e( 'Select...', 'advanced-form-integration' ); ?></option>
                        <option v-for="(item, index) in fielddata.users" :value="index" > {{item}}  </option>
                    </select>
                    <div class="spinner" v-bind:class="{'is-active': userLoading}" style="float:none;width:auto;height:auto;padding:10px 0 10px 50px;background-position:20px 0;"></div>
                </td>
            </tr>

            <editable-field v-for="field in fields" v-bind:key="field.value" v-bind:field="field" v-bind:trigger="trigger" v-bind:action="action" v-bind:fielddata="fielddata"></editable-field>            
        </table>
    </script>

    <?php
}

add_action( 'wp_ajax_adfoin_get_asana_workspaces', 'adfoin_get_asana_workspaces', 10, 0 );
/*
 * Get Asana Workspaces
 */
function adfoin_get_asana_workspaces() {
    // Security Check
    if (! wp_verify_nonce( $_POST['_nonce'], 'advanced-form-integration' ) ) {
        die( __( 'Security check Failed', 'advanced-form-integration' ) );
    }

    $api_token = get_option( 'adfoin_asana_access_token' );

    if( ! $api_token ) {
        return array();
    }

    $url = 'https://app.asana.com/api/1.0/workspaces/';

    $args = array(
        'headers' => array(
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $api_token
        )
    );

    $workspaces = wp_remote_get( $url, $args );

    if( !is_wp_error( $workspaces ) ) {
        $body  = json_decode( wp_remote_retrieve_body( $workspaces ) );
        $lists = wp_list_pluck( $body->data, 'name', 'gid' );

        wp_send_json_success( $lists );
    } else {
        wp_send_json_error();
    }
}

add_action( 'wp_ajax_adfoin_get_asana_projects', 'adfoin_get_asana_projects', 20, 0 );
/*
 * Get Asana Projects
 */
function adfoin_get_asana_projects() {
    // Security Check
    if (! wp_verify_nonce( $_POST['_nonce'], 'advanced-form-integration' ) ) {
        die( __( 'Security check Failed', 'advanced-form-integration' ) );
    }

    $api_token = get_option( "adfoin_asana_access_token" );

    if( ! $api_token ) {
        wp_send_json_error();
    }

    $workspace_id = $_POST['workspaceId'] ? sanitize_text_field( $_POST['workspaceId'] ) : '';

    if( ! $workspace_id ) {
        wp_send_json_error();
    }

    $url = "https://app.asana.com/api/1.0/workspaces/{$workspace_id}/projects";

    $args = array(
        'headers' => array(
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $api_token
        )
    );

    $projects = wp_remote_get( $url, $args );

    if( !is_wp_error( $projects ) ) {
        $body  = json_decode( wp_remote_retrieve_body( $projects ) );
        $lists = wp_list_pluck( $body->data, 'name', 'gid' );

        wp_send_json_success( $lists );
    } else {
        wp_send_json_error();
    }
}

add_action( 'wp_ajax_adfoin_get_asana_users', 'adfoin_get_asana_users', 20, 0 );
/*
 * Get Asana Users
 */
function adfoin_get_asana_users() {
    // Security Check
    if (! wp_verify_nonce( $_POST['_nonce'], 'advanced-form-integration' ) ) {
        die( __( 'Security check Failed', 'advanced-form-integration' ) );
    }

    $api_token = get_option( "adfoin_asana_access_token" );

    if( ! $api_token ) {
        wp_send_json_error();
    }

    $workspace_id = $_POST['workspaceId'] ? sanitize_text_field( $_POST['workspaceId'] ) : '';

    if( ! $workspace_id ) {
        wp_send_json_error();
    }

    $url = "https://app.asana.com/api/1.0/workspaces/{$workspace_id}/users";

    $args = array(
        'headers' => array(
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $api_token
        )
    );

    $users = wp_remote_get( $url, $args );

    if( !is_wp_error( $users ) ) {
        $body  = json_decode( wp_remote_retrieve_body( $users ) );
        $lists = wp_list_pluck( $body->data, 'name', 'gid' );

        wp_send_json_success( $lists );
    } else {
        wp_send_json_error();
    }
}

add_action( 'wp_ajax_adfoin_get_asana_sections', 'adfoin_get_asana_sections', 20, 0 );
/*
 * Get Asana Project Sections
 */
function adfoin_get_asana_sections() {
    // Security Check
    if (! wp_verify_nonce( $_POST['_nonce'], 'advanced-form-integration' ) ) {
        die( __( 'Security check Failed', 'advanced-form-integration' ) );
    }

    $api_token = get_option( "adfoin_asana_access_token" );

    if( ! $api_token ) {
        wp_send_json_error();
    }

    $project_id = $_POST['projectId'] ? sanitize_text_field( $_POST['projectId'] ) : '';

    if( ! $project_id ) {
        wp_send_json_error();
    }

    $url = "https://app.asana.com/api/1.0/projects/{$project_id}/sections";

    $args = array(
        'headers' => array(
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $api_token
        )
    );

    $sections = wp_remote_get( $url, $args );

    if( !is_wp_error( $sections ) ) {
        $body  = json_decode( wp_remote_retrieve_body( $sections ) );
        $lists = wp_list_pluck( $body->data, 'name', 'gid' );

        wp_send_json_success( $lists );
    } else {
        wp_send_json_error();
    }
}

/*
 * Handles sending data to Asana API
 */
function adfoin_asana_send_data( $record, $posted_data ) {

    $api_token   = get_option( 'adfoin_asana_access_token' ) ? get_option( 'adfoin_asana_access_token' ) : '';

    if( !$api_token ) {
        return;
    }

    $record_data = json_decode( $record["data"], true );

    if( array_key_exists( "cl", $record_data["action_data"] ) ) {
        if( $record_data["action_data"]["cl"]["active"] == "yes" ) {
            if( !adfoin_match_conditional_logic( $record_data["action_data"]["cl"], $posted_data ) ) {
                return;
            }
        }
    }

    $data         = $record_data["field_data"];
    $task         = $record["task"];
    $workspace_id = empty( $data["workspaceId"] ) ? "" : $data["workspaceId"];
    $project_id   = empty( $data["projectId"] ) ? "" : $data["projectId"];
    $section_id   = empty( $data["sectionId"] ) ? "" : $data["sectionId"];
    $user_id      = empty( $data["userId"] ) ? "" : $data["userId"];
    $name         = empty( $data["name"] ) ? "" : adfoin_get_parsed_values( $data["name"], $posted_data );
    $notes        = empty( $data["notes"] ) ? "" : adfoin_get_parsed_values( $data["notes"], $posted_data );
    $due_on       = empty( $data["dueOn"] ) ? "" : adfoin_get_parsed_values( $data["dueOn"], $posted_data );

    if( $task == 'create_task' ) {

        $url = 'https://app.asana.com/api/1.0/tasks';

        $body = array(
            'data' => array(
                    'workspace' => $workspace_id,
                    'projects'  => array( $project_id ),
                    'name'      => $name,
                    'notes'     => $notes,
                    'due_on'    => $due_on
            )
        );

        if( $user_id ) {
            $body['data']['assignee'] = $user_id;
        }

        $body['data'] = array_filter( $body['data'] );

        $args = array(
            'headers' => array(
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $api_token
            ),
            'body' => json_encode( $body )
        );

        $response = wp_remote_post( $url, $args );

        adfoin_add_to_log( $response, $url, $args, $record );

        $task_id = '';

        if( $section_id ) {
            if( '201' == wp_remote_retrieve_response_code( $response ) ) {
                $body = json_decode( wp_remote_retrieve_body( $response ) );
                $task_id = $body->data->gid;
    
                $url = "https://app.asana.com/api/1.0/sections/{$section_id}/addTask";

                $body = array(
                    'data' => array(
                        'task' => $task_id
                    )
                );

                $args = array(
                    'headers' => array(
                        'Content-Type' => 'application/json',
                        'Authorization' => 'Bearer ' . $api_token
                    ),
                    'body' => json_encode( $body )
                );
        
                $response = wp_remote_post( $url, $args );
        
                adfoin_add_to_log( $response, $url, $args, $record );
                
            }
        }

        
    }

    return;
}