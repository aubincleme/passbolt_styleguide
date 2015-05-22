<!doctype html>
<html lang="en" class=" js  cookies cssscrollbar" style="">
<head>
    <meta charset="utf-8">
    <title>Passbolt - The simple password management system</title>
    <!--
             ____                  __          ____
            / __ \____  _____ ____/ /_  ____  / / /_
           / /_/ / __ `/ ___/ ___/ __ \/ __ \/ / __/
          / ____/ /_/ (__  |__  ) /_/ / /_/ / / /_
         /_/    \__,_/____/____/_.___/\____/_/\__/

         The password management solution
         (c) 2014 passbolt.com

     -->
    <base href="../src/">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="css/main.css" type="text/css" rel="stylesheet">
    <link href="css/devel.css" type="text/css" rel="stylesheet">
    <script src="/js/lib/compat/modernizr.js"></script>
    <script type="application/javascript">
        var cakephpConfig = {
            app: {
                name: "Passbolt",
                punchline: "The simple password management system",
                copyright: "",
                title: "%s | Passbolt",
                version: {
                    number: "2.13.3",
                    name: "Sauvage",
                    song: "http://youtu.be/DaRG0ukxYqQ"
                },
                url: "http://passbolt.dev/",
                debug: "1"
            },
            user: {
                id: "5540b45f-78f4-43b9-8993-7a92c0a895dc"
            },
            roles: {
                "user": "0208f57a-c5cd-11e1-a0c5-080027796c4c",
                "admin": "142c1188-c5cd-11e1-a0c5-080027796c4c"
            },
            image_storage: {
                public_path: "img/public"
            }
        };
    </script>
</head>
<body>
<!-- main -->
<div class="page password" id="container">
<div class="mad_event_event_bus"></div>
<div class="mad_devel_devel" id="56f7227c-8515-7c7b-fadb-1d88beb5e974">
    <div id="js-devel-sidebar-ctl"
         class="mad_devel_devel_sidebar_controller mad_view_view js_component ready">
        <button class="devel-sidebar-toggle-button mad_controller_component_button_controller mad_view_view js_component closed"
                id="js-devel-sidebar-toggle-button"></button>
        <div class="devel-sidebar" id="js-devel-sidebar">
            <div class="devel-sidebar-menu-wrapper">
                <ul class="devel-sidebar-menu mad_controller_component_menu_controller mad_view_component_tree menu ready"
                    id="js-devel-sidebar-menu">
                    <li class="ready" id="3646ccdc-b5a7-c1a3-3951-ad90bb2cacbc">
                        <div class="row">
                            <div class="main-cell-wrapper">
                                <div class="main-cell">
                                    <a href="#"><span>Components browser</span></a>
                                </div>
                            </div>
                        </div>


                    </li>
                    <li class="ready" id="60765a8e-e70c-51a2-c489-5ec9139b1265">
                        <div class="row">
                            <div class="main-cell-wrapper">
                                <div class="main-cell">
                                    <a href="#"><span>SQL trace</span></a>
                                </div>
                            </div>
                        </div>


                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="js_app_controller"
     class="passbolt_controller_app_controller mad_view_view js_component ready">
<div class="mad_controller_component_dialog_controller mad_view_component_dialog dialog-wrapper ready"
     id="a3b4d492-ef80-0b44-f15b-b6346abfb395">
    <div class="dialog">
        <div class="dialog-header">
            <h2>Share<span class="dialog-header-subtitle">tes</span></h2>
            <a class="dialog-close" href="#"><i
                    class="icon close no-text"></i><span>close</span></a>
        </div>
        <div class="js_dialog_content dialog-content">
            <div id="aee7a3f1-f63b-8ee9-25f2-2f056c369324"
                 class="passbolt_controller_component_resource_actions_tab_controller mad_view_component_tab tabs ready">
                <ul class="js_tabs_nav tabs-nav mad_controller_component_menu_controller mad_view_component_tree menu ready"
                    id="e616d866-acb5-30aa-2aa0-b10eb3b64e61">
                    <li class="ready" id="js_tab_nav_js_rs_edit">
                        <div class="row">
                            <div class="main-cell-wrapper">
                                <div class="main-cell">
                                    <a href="#"><span>Edit</span></a>
                                </div>
                            </div>
                        </div>


                    </li>
                    <li class="ready" id="js_tab_nav_js_rs_permission">
                        <div class="row">
                            <div class="main-cell-wrapper">
                                <div class="main-cell">
                                    <a href="#"
                                       class="selected"><span>Share</span></a>
                                </div>
                            </div>
                        </div>


                    </li>
                </ul>

                <div class="js_tabs_content tabs-content">
                    <form id="js_rs_edit"
                          class="passbolt_controller_form_resource_create_form_controller mad_view_form_form_view tab-content ready">
                        <div class="form-content">

                            <input type="hidden"
                                   class="form_field mad_form_element_textbox_controller mad_view_form_element_textbox_view js_component ready"
                                   id="js_field_category_id"
                                   name="passbolt.model.Resource.Category.id"
                                   value="">

                            <div class="input text required js_form_element_wrapper">
                                <label for="js_field_name">Name</label>
                                <input type="text" placeholder="name"
                                       id="js_field_name" maxlength="50"
                                       class="required mad_form_element_textbox_controller mad_view_form_element_textbox_view js_component ready"
                                       name="passbolt.model.Resource.name">

                                <div class="message mad_form_feedback_controller mad_view_view js_component ready"
                                     id="js_field_name_feedback">
                                </div>
                            </div>

                            <div class="input text js_form_element_wrapper">
                                <label for="js_field_uri">URL</label>
                                <input type="text"
                                       placeholder="https://example.com/login"
                                       id="js_field_uri" maxlength="50"
                                       name="passbolt.model.Resource.uri"
                                       class="mad_form_element_textbox_controller mad_view_form_element_textbox_view js_component ready">

                                <div class="message mad_form_feedback_controller mad_view_view js_component ready"
                                     id="js_field_uri_feedback">
                                </div>
                            </div>

                            <div class="input text required js_form_element_wrapper">
                                <label for="js_field_username">Username</label>
                                <input type="text" placeholder="name"
                                       id="js_field_username" maxlength="50"
                                       class="required mad_form_element_textbox_controller mad_view_form_element_textbox_view js_component ready"
                                       name="passbolt.model.Resource.username">

                                <div class="message mad_form_feedback_controller mad_view_view js_component ready"
                                     id="js_field_username_feedback">
                                </div>
                            </div>
                            <div class="js_form_element_wrapper js_form_secret_wrapper">
                                <label for="js_field_secret_data_0">Password</label>

                                <div class="js_secret_edit_form passbolt_controller_form_secret_create_form_controller mad_view_form_form_view js_component ready"
                                     id="js_secret_edit_0">
                                    <input type="hidden"
                                           class="js_field_secret_id form_field mad_form_element_textbox_controller mad_view_form_element_textbox_view js_component ready"
                                           id="js_field_secret_id_0"
                                           name="passbolt.model.Secret.id"
                                           value="5540b591-ccd0-4138-a512-7b10c0a895dc">
                                    <input type="hidden"
                                           class="js_field_secret_user_id form_field mad_form_element_textbox_controller mad_view_form_element_textbox_view js_component ready"
                                           id="js_field_secret_user_id_0"
                                           name="passbolt.model.Secret.user_id"
                                           value="5540b45f-78f4-43b9-8993-7a92c0a895dc">
                                    <textarea
                                            class="form_field hidden js_field_secret_data mad_form_element_textbox_controller mad_view_form_element_textbox_view js_component ready"
                                            id="js_field_secret_data_0"
                                            name="passbolt.model.Secret.data"></textarea>
                                </div>
                                <iframe frameborder="0"
                                        id="passbolt-iframe-secret-edition"
                                        src="about:blank?passbolt=decryptInline"></iframe>
                            </div>
                            <div class="input textarea js_form_element_wrapper">
                                <label for="js_field_description">Description</label>
                                <textarea placeholder="add a description"
                                          id="js_field_description"
                                          maxlength="150"
                                          class="required mad_form_element_textbox_controller mad_view_form_element_textbox_view js_component ready"
                                          name="passbolt.model.Resource.description"> </textarea>

                                <div class="message mad_form_feedback_controller mad_view_view js_component ready"
                                     id="js_field_description_feedback">
                                </div>
                            </div>
                        </div>
                        <div class="submit-wrapper clearfix">
                            <input type="submit" value="save"
                                   class="button primary">
                            <a class="js-dialog-cancel cancel"
                               href="#">cancel</a>
                        </div>
                    </form>
                    <div id="js_rs_permission"
                         class="passbolt_controller_component_permissions_controller passbolt_view_component_permissions share-tab tab-content ready selected">
                        <div class="form-content permission-edit">
                            <ul class="permissions scroll mad_controller_component_tree_controller mad_view_component_tree ready"
                                id="js_permissions_list">
                                <li class="row direct-permission"
                                    id="5540b591-0ae8-4dc2-b791-7b10c0a895dc">
                                    <div class="avatar">
                                        <img src="img/avatar/user.png">
                                    </div>
                                    <div class="group">
                                        <span class="name">kevin muller has a very long name yes very long</span>
                                        <span class="details"><a href="#">mynameisgnu@gmail.com</a></span>
                                    </div>
                                    <div class="select rights">
                                        <form class="js_perm_edit_form"
                                              id="js_share_rs_perm_5540b591-0ae8-4dc2-b791-7b10c0a895dc">
                                            <select class="js_share_rs_perm_type permission mad_form_element_dropdown_controller mad_view_form_element_dropdown_view js_component ready"
                                                    id="523d70ab-be47-c4d3-18ba-9210a80718a8">

                                                <option value="0">deny</option>

                                                <option value="1">can read
                                                </option>

                                                <option value="3">can create
                                                </option>

                                                <option value="7">can update
                                                </option>

                                                <option value="15">is owner
                                                </option>

                                            </select>
                                        </form>
                                    </div>
                                    <div class="actions">

                                        <a title="remove"
                                           class="js_perm_delete close"
                                           href="#">
                                            <i class="icon close no-text"></i>
                                            <span>remove</span>
                                        </a>

                                    </div>
                                </li>

															<li class="row direct-permission"
																	id="5540b591-0ae8-4dc2-b791-7b10c0a895dc">
																<div class="avatar">
																	<img src="img/avatar/user.png">
																</div>
																<div class="group">
																	<span class="name">kevin muller</span>
																	<span class="details"><a href="#">mynameisgnu_mynameisgnu_mynameisgnu@gmail.com</a></span>
																</div>
																<div class="select rights">
																	<form class="js_perm_edit_form"
																				id="js_share_rs_perm_5540b591-0ae8-4dc2-b791-7b10c0a895dc">
																		<select class="js_share_rs_perm_type permission mad_form_element_dropdown_controller mad_view_form_element_dropdown_view js_component ready"
																						id="523d70ab-be47-c4d3-18ba-9210a80718a8">

																			<option value="0">deny</option>

																			<option value="1">can read
																			</option>

																			<option value="3">can create
																			</option>

																			<option value="7">can update
																			</option>

																			<option value="15">is owner
																			</option>

																		</select>
																	</form>
																</div>
																<div class="actions">

																	<a title="remove"
																		 class="js_perm_delete close"
																		 href="#">
																		<i class="icon close no-text"></i>
																		<span>remove</span>
																	</a>

																</div>
															</li>

															<li class="row direct-permission"
																	id="5540b591-0ae8-4dc2-b791-7b10c0a895dc">
																<div class="avatar">
																	<img src="img/avatar/user.png">
																</div>
																<div class="group">
																	<span class="name">kevin muller</span>
																	<span class="details"><a href="#">mynameisgnu@gmail.com</a></span>
																</div>
																<div class="select rights">
																	<form class="js_perm_edit_form"
																				id="js_share_rs_perm_5540b591-0ae8-4dc2-b791-7b10c0a895dc">
																		<select class="js_share_rs_perm_type permission mad_form_element_dropdown_controller mad_view_form_element_dropdown_view js_component ready"
																						id="523d70ab-be47-c4d3-18ba-9210a80718a8">

																			<option value="0">deny</option>

																			<option value="1">can read
																			</option>

																			<option value="3">can create
																			</option>

																			<option value="7">can update
																			</option>

																			<option value="15">is owner
																			</option>

																		</select>
																	</form>
																</div>
																<div class="actions">

																	<a title="remove"
																		 class="js_perm_delete close"
																		 href="#">
																		<i class="icon close no-text"></i>
																		<span>remove</span>
																	</a>

																</div>
															</li>

															<li class="row direct-permission"
																	id="5540b591-0ae8-4dc2-b791-7b10c0a895dc">
																<div class="avatar">
																	<img src="img/avatar/user.png">
																</div>
																<div class="group">
																	<span class="name">kevin muller</span>
																	<span class="details"><a href="#">mynameisgnu@gmail.com</a></span>
																</div>
																<div class="select rights">
																	<form class="js_perm_edit_form"
																				id="js_share_rs_perm_5540b591-0ae8-4dc2-b791-7b10c0a895dc">
																		<select class="js_share_rs_perm_type permission mad_form_element_dropdown_controller mad_view_form_element_dropdown_view js_component ready"
																						id="523d70ab-be47-c4d3-18ba-9210a80718a8">

																			<option value="0">deny</option>

																			<option value="1">can read
																			</option>

																			<option value="3">can create
																			</option>

																			<option value="7">can update
																			</option>

																			<option value="15">is owner
																			</option>

																		</select>
																	</form>
																</div>
																<div class="actions">

																	<a title="remove"
																		 class="js_perm_delete close"
																		 href="#">
																		<i class="icon close no-text"></i>
																		<span>remove</span>
																	</a>

																</div>
															</li>
															<li class="row direct-permission"
																	id="5540b591-0ae8-4dc2-b791-7b10c0a895dc">
																<div class="avatar">
																	<img src="img/avatar/user.png">
																</div>
																<div class="group">
																	<span class="name">kevin muller</span>
																	<span class="details"><a href="#">mynameisgnu@gmail.com</a></span>
																</div>
																<div class="select rights">
																	<form class="js_perm_edit_form"
																				id="js_share_rs_perm_5540b591-0ae8-4dc2-b791-7b10c0a895dc">
																		<select class="js_share_rs_perm_type permission mad_form_element_dropdown_controller mad_view_form_element_dropdown_view js_component ready"
																						id="523d70ab-be47-c4d3-18ba-9210a80718a8">

																			<option value="0">deny</option>

																			<option value="1">can read
																			</option>

																			<option value="3">can create
																			</option>

																			<option value="7">can update
																			</option>

																			<option value="15">is owner
																			</option>

																		</select>
																	</form>
																</div>
																<div class="actions">

																	<a title="remove"
																		 class="js_perm_delete close"
																		 href="#">
																		<i class="icon close no-text"></i>
																		<span>remove</span>
																	</a>

																</div>
															</li>
															<li class="row direct-permission"
																	id="5540b591-0ae8-4dc2-b791-7b10c0a895dc">
																<div class="avatar">
																	<img src="img/avatar/user.png">
																</div>
																<div class="group">
																	<span class="name">kevin muller</span>
																	<span class="details"><a href="#">mynameisgnu@gmail.com</a></span>
																</div>
																<div class="select rights">
																	<form class="js_perm_edit_form"
																				id="js_share_rs_perm_5540b591-0ae8-4dc2-b791-7b10c0a895dc">
																		<select class="js_share_rs_perm_type permission mad_form_element_dropdown_controller mad_view_form_element_dropdown_view js_component ready"
																						id="523d70ab-be47-c4d3-18ba-9210a80718a8">

																			<option value="0">deny</option>

																			<option value="1">can read
																			</option>

																			<option value="3">can create
																			</option>

																			<option value="7">can update
																			</option>

																			<option value="15">is owner
																			</option>

																		</select>
																	</form>
																</div>
																<div class="actions">

																	<a title="remove"
																		 class="js_perm_delete close"
																		 href="#">
																		<i class="icon close no-text"></i>
																		<span>remove</span>
																	</a>

																</div>
															</li>
															<li class="row direct-permission"
																	id="5540b591-0ae8-4dc2-b791-7b10c0a895dc">
																<div class="avatar">
																	<img src="img/avatar/user.png">
																</div>
																<div class="group">
																	<span class="name">kevin muller</span>
																	<span class="details"><a href="#">mynameisgnu@gmail.com</a></span>
																</div>
																<div class="select rights">
																	<form class="js_perm_edit_form"
																				id="js_share_rs_perm_5540b591-0ae8-4dc2-b791-7b10c0a895dc">
																		<select class="js_share_rs_perm_type permission mad_form_element_dropdown_controller mad_view_form_element_dropdown_view js_component ready"
																						id="523d70ab-be47-c4d3-18ba-9210a80718a8">

																			<option value="0">deny</option>

																			<option value="1">can read
																			</option>

																			<option value="3">can create
																			</option>

																			<option value="7">can update
																			</option>

																			<option value="15">is owner
																			</option>

																		</select>
																	</form>
																</div>
																<div class="actions">

																	<a title="remove"
																		 class="js_perm_delete close"
																		 href="#">
																		<i class="icon close no-text"></i>
																		<span>remove</span>
																	</a>

																</div>
															</li>
															<li class="row direct-permission"
																	id="5540b591-0ae8-4dc2-b791-7b10c0a895dc">
																<div class="avatar">
																	<img src="img/avatar/user.png">
																</div>
																<div class="group">
																	<span class="name">kevin muller</span>
																	<span class="details"><a href="#">mynameisgnu@gmail.com</a></span>
																</div>
																<div class="select rights">
																	<form class="js_perm_edit_form"
																				id="js_share_rs_perm_5540b591-0ae8-4dc2-b791-7b10c0a895dc">
																		<select class="js_share_rs_perm_type permission mad_form_element_dropdown_controller mad_view_form_element_dropdown_view js_component ready"
																						id="523d70ab-be47-c4d3-18ba-9210a80718a8">

																			<option value="0">deny</option>

																			<option value="1">can read
																			</option>

																			<option value="3">can create
																			</option>

																			<option value="7">can update
																			</option>

																			<option value="15">is owner
																			</option>

																		</select>
																	</form>
																</div>
																<div class="actions">

																	<a title="remove"
																		 class="js_perm_delete close"
																		 href="#">
																		<i class="icon close no-text"></i>
																		<span>remove</span>
																	</a>

																</div>
															</li>
                            </ul>
                        </div>
                        <div style="display:none; background-color:yellow;"
                             id="js_permissions_changes">
                            <span>You need to save to apply the changes. View changes.</span>
                        </div>

											<div class="form-content permission-add">
												<form class="mad_form_form_controller mad_view_form_form_view perm-create-form clearfix ready" id="js_permission_add_form"><input value="" class="mad_form_element_textbox_controller mad_view_form_element_textbox_view js_component ready" id="js_perm_create_form_aro" type="hidden">
													<div class="input text autocomplete">
														<label for="js_perm_create_form_aro_auto_cplt">Share with people</label>
														<input class="mad_form_element_autocomplete_controller mad_view_form_element_autocomplete_view js_component ready" maxlength="50" id="js_perm_create_form_aro_auto_cplt" placeholder="" type="text"><ul style="display: none;" class="mad_controller_component_tree_controller mad_view_component_tree autocomplete-content hidden" id="187c7a4a-2a99-ccd6-ae0e-ce1cf995f35e"></ul>
													</div>
													<div class="select left perm-type">
														<select id="js_perm_create_form_type" class="permission mad_form_element_dropdown_controller mad_view_form_element_dropdown_view js_component ready">
															<option value="0">deny</option>
															<option value="1">can read</option>
															<option value="3">can create</option>
															<option value="7">can update</option>
															<option value="15">is owner</option>
														</select>
													</div>
													<div class="actions">
														<input id="js_perm_create_form_add_btn" class="button primary" value="add" type="submit">
													</div>
													<div class="input blank">
														<div id="js_perm_create_form_feedback" class="message error mad_form_feedback_controller mad_view_view js_component ready">
															this is an error message
														</div>
													</div>
												</form>
											</div>
                        <div class="submit-wrapper clearfix">
                            <input type="submit" value="save"
                                   class="button primary" id="js_rs_share_save">
                            <a class="js-dialog-cancel cancel"
                               href="#">cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="update-loading-bar passbolt_controller_component_loading_bar_controller passbolt_view_component_loading_bar js_component ready"
     id="js_app_loading_bar">
    <div class="progress-bar">
        <span style="width: 0%;"></span>
    </div>
</div>
<div class="notification-container">
    <div class="notification col2_3 push_1 passbolt_controller_component_notification_controller passbolt_view_component_notification js_component hidden"
         id="js_app_notificator" style="display: none;"><span
            class="message animated fadeInUp success">
    <strong>success</strong>
    The secret has been copied in your clipboard
</span>
    </div>
</div>
<div class="header first">
    <nav>
        <div class="primary navigation top">
            <ul class="left passbolt_controller_component_app_navigation_left_controller mad_view_component_tree menu ready"
                id="js_app_navigation_left">
                <li class="home ready"
                    id="ba3e5752-9de9-f18b-f09d-533d770e8ca6">
                    <div class="row">
                        <div class="main-cell-wrapper">
                            <div class="main-cell">
                                <a href="#"><span>home</span></a>
                            </div>
                        </div>
                    </div>


                </li>
                <li class="passwords ready"
                    id="7a2b9b02-f22e-c04c-75a9-09222f8a6a46">
                    <div class="row">
                        <div class="main-cell-wrapper">
                            <div class="main-cell">
                                <a href="#"><span>passwords</span></a>
                            </div>
                        </div>
                    </div>


                </li>
                <li class="users ready"
                    id="51de8dfa-0e11-c9c5-e6b1-91083d0a2c80">
                    <div class="row">
                        <div class="main-cell-wrapper">
                            <div class="main-cell">
                                <a href="#"><span>users</span></a>
                            </div>
                        </div>
                    </div>


                </li>
            </ul>
            <ul class="right passbolt_controller_component_app_navigation_right_controller mad_view_component_tree menu ready"
                id="js_app_navigation_right">
                <li class="logout ready"
                    id="cdc43c7f-962f-17db-7f56-0e0c87b6dcac">
                    <div class="row">
                        <div class="main-cell-wrapper">
                            <div class="main-cell">
                                <a href="#"><span>logout</span></a>
                            </div>
                        </div>
                    </div>


                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="header second">
    <div class="col1">
        <div class="logo">
            <img alt="passbolt" src="img/logo/logo.png">
        </div>
    </div>
    <div class="col2 search-wrapper">
        <div id="js_app_filter"
             class="passbolt_controller_component_app_filter_controller passbolt_view_component_app_filter js_component ready">
            <form class="search mad_form_form_controller mad_view_form_form_view js_component ready"
                  id="js_app_filter_form">
                <!-- <ul id="js_filter_tags" class="tags"></ul> -->
                <div class="input search required">
                    <label for="js_app_filter_form">
                        Search</label>
                    <input type="search" placeholder="search passwords"
                           maxlength="50"
                           class="required mad_form_element_textbox_controller mad_view_form_element_textbox_view js_component ready"
                           id="js_app_filter_keywords">
                </div>
                <button value="search">
                    <i class="icon search"></i>
                    <span class="text visuallyhidden">search</span>
                </button>
            </form>
            <!-- <form id="js_filter_form">
                <ul id="js_filter_tags" class="tags"></ul>
                <fieldset>
                    <legend>
                        Please enter a search keyword
                    </legend>
                    <div class="input text required">
                        <label for="js_filter_keywords">
                            Search</label>
                        <input id="js_filter_keywords" class="required" maxlength="50" type="text"/>
                    </div>
                </fieldset>
                <span id="js_filter_reset" class="control reset">x</span>
                <div class="submit">
                    <input type="submit" />
                </div>
            </form> --></div>
    </div>
    <div class="col3 profile-wrapper">
        <div class="user profile dropdown passbolt_controller_component_profile_dropdown_controller mad_view_component_button_dropdown js_component ready"
             id="js_app_profile_dropdown">
            <div class="center-cell-wrapper">
                <div class="details center-cell">
                    <span class="name">kevin muller</span>
                    <span class="email">mynameisgnu@gmail.com</span>
                </div>
            </div>
            <div class="picture left-cell">
                <img alt="your picture" src="img/avatar/user.png">
            </div>
            <div class="more right-cell">
                <a href="#"><span>more</span></a>
            </div>
            <ul class="dropdown-content right mad_controller_component_menu_controller mad_view_component_tree menu ready"
                id="e39b571c-a66c-3268-2913-9c13c6908aa4">
                <li class="ready" id="da839d51-1492-b53e-5600-f15d9395c6ee">
                    <div class="row">
                        <div class="main-cell-wrapper">
                            <div class="main-cell">
                                <a href="#"><span>my profile</span></a>
                            </div>
                        </div>
                    </div>


                </li>
                <li class="ready" id="9e10ddf0-363c-41f7-e66f-c62a6d54eb95">
                    <div class="row">
                        <div class="main-cell-wrapper">
                            <div class="main-cell">
                                <a href="#"><span>manage or generate new keys</span></a>
                            </div>
                        </div>
                    </div>


                </li>
                <li class="separator-after ready"
                    id="343b7d3b-2954-923a-2b4f-f561fb309ff6">
                    <div class="row">
                        <div class="main-cell-wrapper">
                            <div class="main-cell">
                                <a href="#"><span>manage people</span></a>
                            </div>
                        </div>
                    </div>


                </li>
                <li class="ready" id="d1d32453-6422-89d8-6a56-3f73ef4eca3c">
                    <div class="row">
                        <div class="main-cell-wrapper">
                            <div class="main-cell">
                                <a href="#"><span>logout</span></a>
                            </div>
                        </div>
                    </div>


                </li>
            </ul>
        </div>
    </div>
</div>
<div class="header third">
    <div class="col1 workspace-title-wrapper">
        <h1 class="workspace-title">Passwords</h1>
    </div>
    <div class="col2_3 actions-wrapper">
        <ul class="actions mad_controller_component_tab_controller mad_view_component_tab js_component ready"
            id="js_wsp_primary_menu">
            <div class="js_tabs_content tabs-content">
                <div id="js_passbolt_passwordWorkspaceMenu_controller"
                     class="passbolt_controller_component_password_workspace_menu_controller mad_view_view tab-content selected selection">
                    <li>
                        <a class="button mad_controller_component_button_controller mad_view_view js_component ready"
                           href="#" id="js_wk_menu_creation_button">
                            <i class="icon create"></i>
                            <span>create</span>
                        </a>
                    </li>
                    <li>
                        <a class="button mad_controller_component_button_controller mad_view_view js_component ready"
                           href="#" id="js_wk_menu_edition_button">
                            <i class="icon edit"></i>
                            <span>edit</span>
                        </a>
                    </li>
                    <li>
                        <a class="button mad_controller_component_button_controller mad_view_view js_component ready"
                           href="#" id="js_wk_menu_deletion_button">
                            <i class="icon delete"></i>
                            <span>delete</span>
                        </a>
                    </li>
                    <li>
                        <a class="button mad_controller_component_button_controller mad_view_view js_component ready"
                           href="#" id="js_wk_menu_sharing_button">
                            <i class="icon share"></i>
                            <span>share</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a class="button mad_controller_component_button_dropdown_controller mad_view_component_button_dropdown js_component ready"
                               href="#" id="js_wk_menu_more_button">
                                <span>more</span>
                                <i class="icon after arrowdown"></i>
                            </a>
                            <ul class="dropdown-content mad_controller_component_menu_controller mad_view_component_tree menu ready"
                                id="65d28825-05ec-a205-7c9b-91e228497511">
                                <li class="todo ready"
                                    id="c774c8de-18e0-1940-dec5-8e4dff04aaa5">
                                    <div class="row">
                                        <div class="main-cell-wrapper">
                                            <div class="main-cell">
                                                <a href="#"><span>copy login to clipboard</span></a>
                                            </div>
                                        </div>
                                    </div>


                                </li>
                                <li class="todo ready"
                                    id="d17a73ba-4c37-f37c-e633-65837c082bb3">
                                    <div class="row">
                                        <div class="main-cell-wrapper">
                                            <div class="main-cell">
                                                <a href="#"><span>copy password to clipboard</span></a>
                                            </div>
                                        </div>
                                    </div>


                                </li>
                            </ul>
                        </div>
                    </li>
                </div>
                <div id="js_passbolt_peopleWorkspaceMenu_controller"
                     class="passbolt_controller_component_people_workspace_menu_controller"></div>
                <div id="js_passbolt_preferenceWorkspaceMenu_controller"
                     class="passbolt_controller_component_preference_workspace_menu_controller"></div>
            </div>
        </ul>
        <ul class="actions secondary passbolt_controller_component_workspace_secondary_menu_controller mad_view_view js_component ready"
            id="js_wsp_secondary_menu">
            <li>
                <a class="button toggle mad_controller_component_toggle_button_controller mad_view_view js_component ready"
                   href="#" id="js_wk_secondary_menu_view_sidebar_button">
                    <i class="icon layout eye big no-text"></i>
                    <span>view sidebar</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="panel main mad_controller_component_tab_controller mad_view_component_tab js_component ready"
     id="js_app_panel_main">
<div class="js_tabs_content tabs-content">
<div id="js_passbolt_passwordWorkspace_controller"
     class="passbolt_controller_password_workspace_controller mad_view_view tab-content ready selected">
<div class="js_workspace">
<div class="panel left">
    <div class="navigation first shortcuts">
        <ul class="clearfix passbolt_controller_component_resource_shortcuts_controller mad_view_component_tree menu ready"
            id="js_wsp_pwd_rs_shortcuts">
            <li class="selected ready"
                id="ec19c890-524b-4f6c-eca2-68576df61f04">
                <div class="row">
                    <div class="main-cell-wrapper">
                        <div class="main-cell">
                            <a href="#"><span>All items</span></a>
                        </div>
                    </div>
                </div>


            </li>
            <li class="ready" id="ec723993-4f06-95a3-d1b9-0518b6a37d88">
                <div class="row">
                    <div class="main-cell-wrapper">
                        <div class="main-cell">
                            <a href="#"><span>Favorite</span></a>
                        </div>
                    </div>
                </div>


            </li>
            <li class="ready" id="041b6786-af04-924c-c96e-3d837d699b8f">
                <div class="row">
                    <div class="main-cell-wrapper">
                        <div class="main-cell">
                            <a href="#"><span>Recently modified</span></a>
                        </div>
                    </div>
                </div>


            </li>
            <li class="ready" id="70c083ea-0c24-fc29-5df2-10597986c5d5">
                <div class="row">
                    <div class="main-cell-wrapper">
                        <div class="main-cell">
                            <a href="#"><span>Shared with me</span></a>
                        </div>
                    </div>
                </div>


            </li>
            <li class="ready" id="4772f7ac-6bf2-a696-ded5-d146e669b248">
                <div class="row">
                    <div class="main-cell-wrapper">
                        <div class="main-cell">
                            <a href="#"><span>Items I own</span></a>
                        </div>
                    </div>
                </div>


            </li>
        </ul>
    </div>
    <div class="navigation last tree categories">
        <ul id="js_wsp_pwd_category_chooser">
        </ul>
    </div>
</div>
<div class="panel middle">
    <div class="breadcrumbs passbolt_controller_component_password_breadcrumb_controller mad_view_view js_component ready"
         id="js_wsp_pwd_breadcrumb">
        <ul class="mad_controller_component_menu_controller mad_view_component_tree menu ready"
            id="ac65473c-9c4d-201d-1cf1-8cc22e379102">
            <li class="ready" id="3892d24a-0b82-7f79-20be-cabaf8f6b992">
                <div class="main-cell">
                    <a href="#"><span>All items</span></a>
                </div>
            </li>
        </ul>
    </div>
    <div class="tableview passbolt_controller_component_password_browser_controller passbolt_view_component_password_browser selection"
         id="js_wsp_pwd_browser">
        <div class="tableview-header">
            <table>
                <thead>
                <tr>

                    <th class="js_grid_column js_grid_column_multipleSelect cell_multipleSelect selections s-cell">
                        <div class="input checkbox"><label
                                for="checkbox-select-all">select all</label>
                        </div>
                    </th>

                    <th class="js_grid_column js_grid_column_favorite cell_favorite selections s-cell">
                        <a href="#"> <i class="icon fav no-text"></i>
                            <span>fav</span> </a>
                    </th>

                    <th class="js_grid_column js_grid_column_name cell_name m-cell">
                        Resource
                    </th>

                    <th class="js_grid_column js_grid_column_username cell_username m-cell">
                        Username
                    </th>

                    <th class="js_grid_column js_grid_column_secret cell_secret m-cell password">
                        Password
                    </th>

                    <th class="js_grid_column js_grid_column_uri cell_uri l-cell">
                        URI
                    </th>

                    <th class="js_grid_column js_grid_column_modified cell_modified m-cell">
                        Modified
                    </th>

                    <th class="js_grid_column js_grid_column_owner cell_owner m-cell">
                        Owner
                    </th>

                    <th class="js_grid_column js_grid_column_copyLogin cell_copyLogin s-cell">

                    </th>

                    <th class="js_grid_column js_grid_column_copySecret cell_copySecret s-cell">

                    </th>

                </tr>
                </thead>
            </table>
        </div>
        <div class="tableview-content scroll">
            <table>
                <tbody>
                <tr id="5540b591-df14-4df5-898f-7b10c0a895dc" class="selected">

                    <td class="js_grid_column_multipleSelect cell_multipleSelect selections s-cell">
                        <div title="">
                            <div id="multiple_select_checkbox_5540b591-df14-4df5-898f-7b10c0a895dc"
                                 class="mad_form_element_checkbox_controller mad_view_form_element_checkbox_view js_checkbox_multiple_select ready">
                                <div class="input checkbox">
                                    <input type="checkbox"
                                           id="checkbox89e9d860-48f7-3d17-c513-c8b907aef7a2"
                                           value="5540b591-df14-4df5-898f-7b10c0a895dc"
                                           checked="checked">
                                    <label for="checkbox89e9d860-48f7-3d17-c513-c8b907aef7a2"></label>
                                </div>
                            </div>
                        </div>
                    </td>

                    <td class="js_grid_column_favorite cell_favorite selections s-cell">
                        <div title="">
                            <div id="favorite_5540b591-df14-4df5-898f-7b10c0a895dc"
                                 class="passbolt_controller_component_favorite_controller passbolt_view_component_favorite js_component ready">
                                <a class="no-text" href="#">
                                    <i class="icon fav"></i>
                                    <span>fav</span>
                                </a>
                            </div>
                        </div>
                    </td>

                    <td class="js_grid_column_name cell_name m-cell">
                        <div title="tes">
                            tes
                        </div>
                    </td>

                    <td class="js_grid_column_username cell_username m-cell">
                        <div title="test">
                            test
                        </div>
                    </td>

                    <td class="js_grid_column_secret cell_secret m-cell password">
                        <div title="">
                            <div class="secret-copy"><a
                                    href="#copy_secret"><span>copy password to clipboard</span></a><pre>-----BEGIN PGP MESSAGE-----
Version: OpenPGP.js v0.7.2
Comment: http://openpgpjs.org

wcBMA0oADtVxItaXAQf+PedFM3fp0vvzAk5q2omSAXpwg5mgzIAQdUSJwnN7
IXRU+jZ8P7tjZM7nJlMNCneWiW7/r01nUi49Dof8PCDOOYDx7uzEC1u3sHUn
sSo1+QvBomBUiO0o1FHa1UWMm9lRtdGEIWCrT2VdtnXq38TOnPhjeiUu3i8M
S7uBlXVa/+s3PE+mKAmKz7K7rnE0Fa+Uma74My36TC2Bu0Jw3/CwM+eIP5e3
mC9XfaCkaXN1S54GBZbPuAqEyumYtbF7iJFzq5dcCg5tXVFa0h/oieLaNAZ6
TSy9Wb5PlfqfknJHtvbHUH7VSSaJgWNE/nXUbDij5kqYozWmpNyZZDzEiJEE
g9I8AWoFy21FS4cmw1greDxEVh+chcRYOKuVg81VWWyZ+tcI2zmtdBMv6zFf
JJOVa5W5zXi3XKnpj9MjW/MY
=4yzP
-----END PGP MESSAGE-----
</pre>
                            </div>
                        </div>
                    </td>

                    <td class="js_grid_column_uri cell_uri l-cell">
                        <div title="">

                        </div>
                    </td>

                    <td class="js_grid_column_modified cell_modified m-cell">
                        <div title="3 days ago">
                            3 days ago
                        </div>
                    </td>

                    <td class="js_grid_column_owner cell_owner m-cell">
                        <div title="mynameisgnu@gmail.com">
                            mynameisgnu@gmail.com
                        </div>
                    </td>

                    <td class="js_grid_column_copyLogin cell_copyLogin s-cell">
                        <div title="">

                        </div>
                    </td>

                    <td class="js_grid_column_copySecret cell_copySecret s-cell">
                        <div title="">

                        </div>
                    </td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div style=""
     class="panel aside js_wsp_pwd_sidebar_second passbolt_controller_component_resource_details_controller passbolt_view_component_resource_details js_component ready"
     id="a0516571-4d0b-591b-3e8f-61407bc293dd">
    <div class="resource">
        <h3>tes</h3>
        <a class="dialog-close" href="#"><i
                class="icon close no-text"></i><span>close</span></a>

        <div class="detailed-information">
            <h4>Information</h4>
            <ul>
                <li class="username">
                    <span class="label">Username</span>
                    <span class="value">test</span>
                </li>
                <li class="password">
                    <div class="label">Password</div>
                    <div class="value">
                        <div class="secret-copy">
                            <a href="#copy_secret">
                                <span>copy password to clipboard</span>
                            </a>
					<pre>-----BEGIN PGP MESSAGE-----
Version: OpenPGP.js v0.7.2
Comment: http://openpgpjs.org

wcBMA0oADtVxItaXAQf+PedFM3fp0vvzAk5q2omSAXpwg5mgzIAQdUSJwnN7
IXRU+jZ8P7tjZM7nJlMNCneWiW7/r01nUi49Dof8PCDOOYDx7uzEC1u3sHUn
sSo1+QvBomBUiO0o1FHa1UWMm9lRtdGEIWCrT2VdtnXq38TOnPhjeiUu3i8M
S7uBlXVa/+s3PE+mKAmKz7K7rnE0Fa+Uma74My36TC2Bu0Jw3/CwM+eIP5e3
mC9XfaCkaXN1S54GBZbPuAqEyumYtbF7iJFzq5dcCg5tXVFa0h/oieLaNAZ6
TSy9Wb5PlfqfknJHtvbHUH7VSSaJgWNE/nXUbDij5kqYozWmpNyZZDzEiJEE
g9I8AWoFy21FS4cmw1greDxEVh+chcRYOKuVg81VWWyZ+tcI2zmtdBMv6zFf
JJOVa5W5zXi3XKnpj9MjW/MY
=4yzP
-----END PGP MESSAGE-----
</pre>
                        </div>
                    </div>
                </li>
                <li class="url">
                    <span class="label">URL</span>
			<span class="value">
				<a target="_blank" href=""></a>
			</span>
                </li>
                <li class="modified">
                    <span class="label">Modified</span>
                    <span class="value">3 days ago</span>
                </li>
                <li class="modified-by">
                    <span class="label">Modified by</span>
                    <span class="value">mynameisgnu@gmail.com</span>
                </li>
                <li class="modified-by">
                    <span class="label">Owner</span>
                    <span class="value">mynameisgnu@gmail.com</span>
                </li>
                <!--<li class="expire">-->
                <!--<span class="label">Expire</span>-->
                <!--<span class="value">never</span>-->
                <!--</li>-->
                <!--<li class="strength">
                    <span class="label">Strength</span>
                    <span>
                        -
                    </span>
                </li>-->
            </ul>
        </div>
        <!-- Description management -->
        <div id="js_rs_details_description"
             class="description passbolt_controller_component_sidebar_section_sidebar_section_description_controller passbolt_view_component_sidebar_section_sidebar_section_description js_component ready">
            <h4>Description</h4>

            <a id="js_edit_description_button"
               class="edit_description_button section-action" href="#">
                <i class="icon edit no-text"></i>
                <span>edit</span>
            </a>

            <p class="description_content"></p>
            <!-- edit description form -->
            <div id="js_rs_details_edit_description"
                 class="passbolt_controller_form_resource_edit_description_form_controller mad_view_form_form_view js_component hidden"
                 style="display: none;">
                <div class="form-content resource-description-edit-wrapper">
                    <input type="hidden" maxlength="36"
                           class="js_resource_id required mad_form_element_textbox_controller mad_view_form_element_textbox_view js_component ready"
                           name="data[Resource][id]"
                           id="b61c5539-1dff-b857-687c-532c426d57a1"
                           value="5540b591-df14-4df5-898f-7b10c0a895dc">

                    <div class="input text required js_form_element_wrapper">
                        <textarea placeholder="enter description"
                                  maxlength="150"
                                  class="js_resource_description required mad_form_element_textbox_controller mad_view_form_element_textbox_view js_component ready"
                                  name="data[Resource][description]"
                                  id="e0428219-ca2d-f450-f830-821950d556d0"></textarea>

                        <div class="js_resource_description_feedback message mad_form_feedback_controller mad_view_view js_component ready"
                             id="e7ffae49-686f-1396-da25-1cc3a3ed29a9">
                        </div>
                    </div>
                    <div class="actions">
                        <input type="submit" value="save"
                               class="button resource-submit">
                    </div>
                </div>
            </div>
        </div>
        <!-- Tags management -->
        <div id="js_rs_details_tags" class="tags clearfix"></div>
        <!-- Comments management -->
        <div id="js_rs_details_comments"
             class="comments clearfix passbolt_controller_component_comments_controller passbolt_view_component_comments js_component ready">
            <h4>Comments</h4>
            <a class="section-action" href="#"><i
                    class="icon create no-text"></i><span>create</span></a>

            <div id="js_rs_details_comments_add_form"
                 class="passbolt_controller_form_comment_create_form_controller mad_view_form_form_view js_component hidden"
                 style="display: none;">
                <ul>
                    <li class="comment-wrapper">
                        <div class="comment add">
                            <div class="author profile picture"><a href="#"><img
                                    src="img/user.png"></a></div>
                            <div class="form-content">
                                <div class="input textarea required">
                                    <label for="Comment">Add a comment</label>
                                    <input type="hidden" maxlength="36"
                                           class="js_comment_parent_id required mad_form_element_textbox_controller mad_view_form_element_textbox_view js_component ready"
                                           name="data[comment][parent_id]"
                                           id="d7a016ab-e11a-bf8d-d786-54367279ee03"
                                           value="">
                                    <input type="hidden" maxlength="36"
                                           class="js_comment_foreign_id required mad_form_element_textbox_controller mad_view_form_element_textbox_view js_component ready"
                                           name="data[comment][foreign_id]"
                                           id="8104043d-2ddf-f515-f6ed-82984d4afc39"
                                           value="5540b591-df14-4df5-898f-7b10c0a895dc">
                                    <input type="hidden" maxlength="36"
                                           class="js_comment_foreign_model required mad_form_element_textbox_controller mad_view_form_element_textbox_view js_component ready"
                                           name="data[comment][foreign_model]"
                                           id="ef7d29b4-acbb-3d60-7946-9c0f66ae976f"
                                           value="Resource">
                                    <textarea placeholder="add a comment"
                                              maxlength="150"
                                              class="js_comment_content required mad_form_element_textbox_controller mad_view_form_element_textbox_view js_component ready"
                                              name="data[comment][content]"
                                              id="ee820427-46cb-17a9-ac94-05360b304fec"></textarea>

                                    <div class="js_comment_content_feedback message mad_form_feedback_controller mad_view_view js_component ready"
                                         id="64978dd8-1028-514a-4d1a-1e2c5e659875">
                                    </div>
                                </div>
                                <div class="metadata">
                                    <span class="author username"><a href="#">You</a></span>
                                    <span class="modified">right now</span>
                                </div>
                                <div class="actions">
                                    <a class="button comment-submit"
                                       href="#"><span>send</span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <ul id="js_rs_details_comments_list"
                class="passbolt_controller_component_comments_list_controller passbolt_view_component_comments_list tree ready"></ul>
        </div>
    </div>
</div>
</div>
</div>
<div id="js_passbolt_peopleWorkspace_controller"
     class="passbolt_controller_people_workspace_controller"></div>
<div id="js_passbolt_preferenceWorkspace_controller"
     class="passbolt_controller_preference_workspace_controller"></div>
</div>
</div>
<div class="footer">
    <span class="copyright"></span> •
    <span class="version">2.13.3</span>
</div>
</div>
</div>
<!-- footer -->
<footer>
    <div class="footer">
        <span class="copyright">2013 &copy; Passbolt.com</span> •
        <span class="version">v.2.13.3</span>
    </div>
</footer>
<!--<script src="/js/lib/can/lib/jquery.1.8.3.js" type="text/javascript"></script>-->
<!--<script src="/js/lib/xregexp/xregexp-all-min.js"-->
        <!--type="text/javascript"></script>-->
<!--<script src="/js/lib/jquery/jquery-ui-1.10.3.custom.js"-->
        <!--type="text/javascript"></script>-->
<!--<script src="/js/lib/moment/moment.min.js" type="text/javascript"></script>-->
<!--<script src="/js/steal/steal.js?app/passbolt.js"-->
        <!--type="text/javascript"></script>-->
<!--<div class="devel-sql-trace grid mad_controller_component_controller mad_view_view js_component hidden"-->
     <!--id="js-devel-sql-trace" style="display: none;">-->
    <!--<div class="row">-->
        <!--<div class="col12">-->

        <!--</div>-->
    <!--</div>-->
<!--</div>-->


</body>
</html>