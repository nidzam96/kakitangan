<!DOCTYPE html>
<html>
<head>
	<title>Team | Nazrol HR</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link src="../bower_components/jquery-ui/themes/base/jquery-ui.min.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/dist/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/fa/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="../css/team.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-select.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="../css/style-1.css"> -->
</head>
<body>
	<!-- <div class="row"> -->
		<dir class="col12">
			<nav class="navbar navbar-inverse">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a href="#" class="navbar-brand">Nazrol HR</a>
				</div>

				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="dashboard.php">
								<span class="fa fa-podcast fa-fw"></span>
								Dashboard
							</a>
						</li>
						<li class="active">
							<a href="users.php">
								<span class="fa fa-users fa-fw"></span>
								Users
							</a>
						</li>
						<li>
							<a href="leave.php">
								<span class="fa fa-calendar fa-fw"></span>
								Leave 
							</a>
						</li>
						<li>
							<a href="benefits.php">
								<span class="fa fa-birthday-cake fa-fw"></span>
								Benefits
							</a>
						</li>
					</ul>	

					<ul class="nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Welcome HR
								<i class="fa fa-user fa-fw"></i>
								<i class="fa fa-caret-down"></i>
							</a>

							<ul class="dropdown-menu dropdown-messages">
								<li>
									<a href="#">
									<i class="fa fa-lock fa-fw"></i>
									Change Password
									</a>
								</li>
								<li>
									<a href="#">
									<i class="fa fa-sign-out fa-fw"></i>
									Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>	
				</div>
			</nav>
		</dir>
	<!-- </div> -->

	<div class="section-2">
		<div class="tabs" role="tabpanel">
			<ul class="nav-tabs" role="tablist">
				<li class="active" role="presentation">
					<a href="#team" role="tab" data-toggle="tab">Team</a>
				</li>
			</ul>
		</div>		

		<div class="tab-content">
			<div class="tab-pane active" id="team">
				<section class="section-secondary section-team">
					
					<div class="row section-team-title">
						<div class="col-md-3 sidebar">
							<h2 class="title">Manage Team</h2>
						</div>

						<div class="col-md-4 section-group-edit">
							<p class="field-group-name"  id="group-name">Everyone</p>
							
							<div class="field-edit-group-button hidden">
								<i class="glyphicon glyphicon-pencil btnEditGroup"></i>
							</div>

							<div class="field-edit-group-form hide">
								<form id="form-edit-group" method="post">
									<div class="row">
										<div class="col-md-4">
											<input type="text" class="form-control form-field-group-name" name="new_group_name" value="Everyone"/>
										</div>
										<div class="col-md-8">
											<button type="submit" class="field btn btn-primary">Save</button>
											<a id="btnCancelEditGroup">Cancel</a>
											<a id="btnDeleteGroup">Remove Group</a>
										</div>
									</div>
								</form>
							</div>
						</div>

						<div class="col-md-5">
							<div class="section-actions pull-right">
								<a href="#" class="btn btn-default bnt-export-team-data">
									<i class="glyphicon glyphicon-export"></i>
									Export team data
								</a>

								<div class="btn-group">
									<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" >
										<i class="fa fa-user-add"></i>
										Add employee(s) to team
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Add a single employee</a>
											<a href="#">Batch add employee</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						
						<div class="col-md-3 col-sm-2 left">
							<button class="btn btn-default btn-block" id="btnCreateGroup">Drop or click here to create group</button>
						</div>

						<div class="col-md-2 col-sm-2 top30">
							<select name="field-job-position" id="field-job-position" class="form-control">
								<option value="">Job Position</option>
								<option value="Developer">Developer</option>
							</select>
						</div>
						<div class="col-md-2 col-sm-2 top30">
							<select  name="field-location" id="field-location" class="form-control">
								<option value="">Branch</option>
								<option value="HQ">Kota Bharu</option>
								<option value="Damansara">Damansara</option>
							</select>
						</div>

						<div class="col-md-2 col-sm-2 top30">
							<select name="field-others" id="field-others" class="form-control">
								<option value="">Others</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>

						<div class="col-md-2 col-sm-2">
							<form class="navbar-form search" role="search">
								<input type="text" class="form-control" placeholder="Search">
								<button type="submit" class="navbar-form-btn">
									<span class="glyphicon glyphicon-search"></span>	
								</button>
							</form>
						</div>			
					</div>

					<div class="section-body" style="margin-top: 10px">
						<div class="row">
							<div class="col-md-3 col-sm-3">
								<div class="section-group-list">
									<p class="top20">Groups</p>
									<div class="panel-group" id="sidebar">
										<div class="panel panel-default">
											<div class="panel-heading">
												<div class="panel-title">
													<i class="glyphicon glyphicon-folder-close"></i>
													<a data-toggle="collapse" data-parent="#sidebar" href="#sidebar_everyone">
														Everyone
													</a>
													<span class="badge pright">0</span>
												</div>
											</div>
											<div id="sidebar_everyone" class="panel-collapse collapse">
												<div class="panel-body">
													<p>Assigned policies:</p>

												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading group-droppable">
												<div class="panel-title">
													<i class="glyphicon glyphicon-folder-close"></i>
													<a data-toggle="collapse" data-parent="#sidebar" href="#sidebar_male">
														Male
													</a>
													<span class="badge pright">0</span>
												</div>
											</div>
											<div id="sidebar_male" class="panel-collapse collapse">
												<div class="panel-body">
													<p>Assigned policies:</p>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading group-droppable">
												<div class="panel-title">
													<i class="glyphicon glyphicon-folder-close"></i>
													<a data-toggle="collapse" data-parent="#sidebar" href="#sidebar_female">
														Female
													</a>
													<span class="badge pright">0</span>
												</div>
											</div>
											<div id="sidebar_female" class="panel-collapse collapse">
												<div class="panel-body">
													<p>Assigned policies:</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-9">
								<p class="top20 tcenter">Assign employees to a group by selecting everyone, then dragging the person into the group at left hand side.</p>

								<div class="row">
									<p>
										<a href="#" class="btn disabled" id="grid_view">
											<i class="glyphicon glyphicon-th"></i>
											Grid
										</a>
										<a href="#" class="btn" id="list_view">
											<i class="glyphicon glyphicon-th-list"></i>
											List
										</a>
									</p>
								</div>

								<ul class="users grid" style="position: relative; height: 126px">
									<li class="user visible ui-draggable ui-draggable-handle" style="position: absolute; left: 0; top: 0">
										<button class="close btnDeleteUserFromGroup">
											<span>X</span>
										</button>

										<figure class="user-image">
											<a href="#">
												<img src="../images/nazrol.png" alt="testing" width="60" height="60">
											</a>
										</figure>

										<div class="user-content">
											
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
			</div>
		</di	v>
	</div>
</body>
	<script src="../css/jquery/dist/jquery.min.js"></script>
	<script src="../css/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>

    <script type="text/javascript" src="../css/admin/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="../css/admin/isotope.pkgd.min.js" ></script>
    <script type="text/javascript" src="../css/admin/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="../css/admin/functions.js"></script>
    <script type="text/javascript" src="../css/admin/bootstrap-dialog.min.js"></script>
    <!-- <script type="text/javascript" src="../css/admin/uservoice.js"></script> -->
        
	<script type="text/javascript" src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../css/admin/bootstrapValidator.min.js"></script>
	<script type="text/javascript" src="../css/admin/typeahead.bundle.min.js"></script>
	<script type="text/javascript" src="../css/admin/bootstrap-tokenfield.min.js"></script>
	<script type="text/javascript" src="../css/admin/jquery.dataTables.js"></script>
	<script type="text/javascript" src="../css/admin/dataTables.bootstrap.js"></script>
	<script type="text/javascript" src="../css/admin/dataTables.tableTools.js"></script>
	<script type="text/javascript" src="../css/admin/jquery.truncate.min.js"></script>

	<script type="text/javascript">
		$( function() {
		  var qsRegex;

		  var $grid = $('.users').isotope({
		    itemSelector: '.user',
		    layoutMode: 'fitRows',
		    filter: function() {
		       return qsRegex ? $(this).text().match( qsRegex ) : true;
		    }
		  });

		  var $search = $('.search').keyup( debounce( function() {
		      qsRegex = new RegExp( $search.val(), 'gi' );
		      $grid.isotope();
		  }, 200 ) );

		  // Filters
			var $users 		= $('.user').addClass('visible');
			var $filterJT 	= $('#field-job-title');
			var $filterLoc 	= $('#field-location');
			var $filterOthers = $('#field-others');

			$filterJT.on('change', function(){
				filterItems();
			});

			$filterLoc.on('change', function(){
				filterItems();
			});

			$filterOthers.on('change', function(){
				filterItems();
			});

			function filterItems(){
				var jt 	= $filterJT.val().trim().toLowerCase();
				var loc = $filterLoc.val().trim().toLowerCase();

		    var others = null;
		    try{
				  others = $filterOthers.val().trim().toLowerCase();
		    }catch(err){
		      others = null;
		    }

				$users.each(function(){
					var $user 		= $(this);
					var isVisible 	= true;
					var userPos 	= $user.find('.user-position').text().trim().toLowerCase();
					var userLoc 	= $user.find('.user-location').text().trim().toLowerCase();
					var userOthers 	= $user.find('.user-others').text().trim().toLowerCase();

					if (jt != '' && userPos != jt){
						isVisible = false;
					}

					if (loc != '' && userLoc != loc){
						isVisible = false;
					}

					if (others != null && others != '') {
			      user_others = userOthers.split(';');
			      var i;
			      for (i = 0; i < user_others.length; i++) {
			        user_others[i] = user_others[i].trim().toLowerCase();
			      }

			      if (user_others.indexOf(others.trim().toLowerCase()) < 0) {
						  isVisible = false;
			      }
					}

					$user.toggleClass('visible', isVisible);
				});

				$('.users').isotope({
				  itemSelector: '.user',
				  layoutMode: 'fitRows'
				});
			}

			$('.users').isotope({
			  itemSelector: '.user',
			  layoutMode: 'fitRows'
			});

		  // Drag and drop function
		  $('ul.users li').draggable({
		    appendTo: "body",
		    helper: "clone"
		  });

		  $('div.group-droppable').droppable({
		  	activeClass: "ui-state-default",
		  	hoverClass: "ui-state-hover",
		  	drop: function(event, ui) {
		  		var data = [];
		      data.push({name:"action", value:"add_user_to_group"});
		      data.push({name:"employee_id", value: ui.draggable.attr('data-user-id')});
		      data.push({name:"group_id", value: $(this).attr('data-group-id')});
		      data.push({name:"csrfmiddlewaretoken", value:getCookie('csrftoken')});

		      var $group = $(this);

		  		$.ajax({
		        "type": 'POST',
		        "url": '/team',
		        "data": data,
		        "success": function (response, textStatus, jqXHR) {
		          window.location.href = "/team";
		        },
		        "error": function (response, textStatus, jqXHR) {
		          var result_message = JSON.parse(response.responseText);

		          BootstrapDialog.show({
		            type: BootstrapDialog.TYPE_WARNING,
		            title: 'Assign employee to group',
		            message: result_message.message,
		            buttons: [{
		              label: 'OK',
		              action: function (dialogRef) {
		                dialogRef.close();
		              }
		            }]
		          });
		        }
		      });
		  	}
		  });

		  $('#btnCreateGroup').click(function(event) {
		    ShowCreateGroupModal(null);
		  });

		  $('.user-name a').truncate();
		 });

		 $('#btnCreateGroup').droppable({
		   activeClass: "ui-state-default",
		   hoverClass: "ui-state-hover",
		   drop: function(event, ui) {
		     ShowCreateGroupModal(ui.draggable.attr('data-user-id'));
		   }
		 });

		 $('#btnSendInvite').click(function(event) {
			 event.preventDefault();

			 var data = [];
			 data.push({name:"csrfmiddlewaretoken", value:getCookie('csrftoken')});
			 data.push({name:"action", value:'send_invitation'});

			 $.ajax({
			   "type": 'POST',
			   "url": '/leave/invite_all',
			   "data": data,
			   "success": function (response, textStatus, jqXHR) {
			     var result_message = JSON.parse(response);

			     BootstrapDialog.show({
			       type: BootstrapDialog.TYPE_DEFAULT,
			       title: 'Send invitations',
			       message: result_message.message,
			       buttons: [{
			         label: 'OK',
			         action: function (dialogRef) {
			           dialogRef.close();
			         }
			       }]
			     });
			   },
			   "error": function (response, textStatus, jqXHR) {
			     BootstrapDialog.show({
			       type: BootstrapDialog.TYPE_WARNING,
			       title: 'Send invitations',
			       message: 'Fail to send invitations.',
			       buttons: [{
			         label: 'OK',
			         action: function (dialogRef) {
			           dialogRef.close();
			         }
			       }]
			     });
			   }
			 });
		 });

		 UpdateGroupRelatedControlStatus($('#group_name').text().trim());

		 $('.btnDeleteUserFromGroup').click(function(event) {
			 event.preventDefault();

			 var data = [];
			 data.push({name:"csrfmiddlewaretoken", value:getCookie('csrftoken')});
			 data.push({name:"action", value:'delete_user_from_group'});
			 data.push({name:"employee_id", value: $(this).parents('li.user').attr('data-user-id')});
			 data.push({name:"group_name", value: $('#group_name').text().trim()});

			 $.ajax({
			   "type": 'POST',
			   "url": '/team',
			   "data": data,
			   "success": function (response, textStatus, jqXHR) {
			     window.location.href = "/team";
			   },
			   "error": function (response, textStatus, jqXHR) {
			     var result_message = JSON.parse(response.responseText);

			     BootstrapDialog.show({
			       type: BootstrapDialog.TYPE_WARNING,
			       title: 'Remove user from group',
			       message: result_message.message,
			       buttons: [{
			         label: 'OK',
			         action: function (dialogRef) {
			           dialogRef.close();
			         }
			       }]
			     });
			   }
			 });
		 });

		 // Functions and logic related to edit/remove group
		 $('.btnEditGroup').click(function(event) {
		   $(this).parents('.section-team').find('.field-edit-group-btn').addClass('hide');
		   $(this).parents('.section-team-title').addClass('no-padding');
		   $(this).parents('.section-group-edit').find('.field-edit-group-form').removeClass('hide');
		 });

		 $('#btnCancelEditGroup').click(function(event) {
		   $(this).parents('.section-team').find('.field-edit-group-btn').removeClass('hide');
		   $(this).parents('.section-team-title').removeClass('no-padding');
		   $(this).parents('.section-group-edit').find('.field-edit-group-form').addClass('hide');
		 });

		 $('#btnDeleteGroup').click(function(event) {
		   event.preventDefault();

		   BootstrapDialog.show({
		     type: BootstrapDialog.TYPE_WARNING,
		     title: 'Remove Group',
		     message: 'Are you sure you want to delete this group ' + $('#group_name').text().trim() + ' and its associated assignment to leave policy?',
		     buttons: [{
		       label: 'Yes',
		       cssClass: 'btn-primary',
		       action: function(dialogRef) {
		         var data = [];
		         data.push({name:"csrfmiddlewaretoken", value:getCookie('csrftoken')});
		         data.push({name:"action", value:'delete_group'});
		         data.push({name:"group_name", value: $('#group_name').text().trim()});

		         $.ajax({
		           "type": 'POST',
		           "url": '/team',
		           "data": data,
		           "success": function (response, textStatus, jqXHR) {
		             window.location.href = "/team";
		           },
		           "error": function (response, textStatus, jqXHR) {
		             var result_message = JSON.parse(response.responseText);

		             BootstrapDialog.show({
		               type: BootstrapDialog.TYPE_WARNING,
		               title: 'Remove Group',
		               message: result_message.message,
		               buttons: [{
		                 label: 'OK',
		                 action: function (dialogRef) {
		                   dialogRef.close();
		                 }
		               }]
		             });
		           }
		         });
		       }
		     },
		               {
		                 label: 'Cancel',
		                 cssClass: 'btn-default',
		                 action: function (dialogRef) {
		                   dialogRef.close();
		                 }
		               }
		     ]
		   });
		 });

		 $('form#form-edit-group').bootstrapValidator({
		   framework: 'bootstrap',
		   message: 'This value is not valid',
		   container: function($field, validator) {
		     var $parent = $field.parents('.form-group');
		   },
		   fields: {
		     new_group_name: {
		       validators: {
		         notEmpty: {
		           message: 'Please specify the group name.'
		         }
		       }
		     }
		   }
		 }).on('success.form.bv', function (e) {
		   e.preventDefault();

		   var data = $(this).serializeArray();
		   data.push({name:"action", value:"edit_group"});
		   data.push({name:"csrfmiddlewaretoken", value:getCookie('csrftoken')});
		   data.push({name:"group_name", value: $('#group_name').text().trim()});

		   $.ajax({
		     "type": 'POST',
		     "url": '/team',
		     "data": data,
		     "success": function (response, textStatus, jqXHR) {
		       window.location.href = "/team";
		     },
		     "error": function (response, textStatus, jqXHR) {
		       var result_message = JSON.parse(response.responseText);

		       BootstrapDialog.show({
		         type: BootstrapDialog.TYPE_WARNING,
		         title: 'Assign employee to group',
		         message: result_message.message,
		         buttons: [{
		           label: 'OK',
		           action: function (dialogRef) {
		             dialogRef.close();
		           }
		         }]
		       });
		     }
		   });
		 });

		// Functions related to the modal of creating group
		function ShowCreateGroupModal(employee_id) {
			var modal = $('#modal-create-group').clone();

		  modal.modal({'backdrop:': 'static', 'show': false})

		  // Set up employee table
		  employee_table = modal.find('#employee_table').DataTable({
				"paging": false,
		    "ajax": {
		      "url": "/leave/query_employees_table",
		      "type": "POST",
		      "data": function (d) {
		        return $.extend({}, d, {
		          "csrfmiddlewaretoken": getCookie('csrftoken'),
		        });
		      }
		    },
		    "columns": [
		      { "data": null, "defaultContent": '', "orderable": false },
		      { "data": "employee" },
		      { "data": "department" },
		      { "data": "location" },
		      { "data": "joined" },
		      { "data": "gender" }
		    ],
		    dom: 'T<"clear">lfrtip',
			  tableTools: {
		      sRowSelect: "multi",
		      sRowSelector: 'td:first-child',
		      aButtons: [ "select_all", "select_none" ]
		    }
			});

			var tableTools = new $.fn.dataTable.TableTools( employee_table, {
		    sRowSelect: 'multi',
		    sRowSelector: 'td:first-child',
		    aButtons: ['select_all', 'select_none' ]
		  });

		  $(tableTools.fnContainer() ).appendTo( '#employee_table_wrapper .col-sm-6:eq(0)' );

		  // Form validation
			modal.find('.form-create-group').bootstrapValidator({
			  framework: 'bootstrap',
			  message: 'This value is not valid',
			  container: function($field, validator) {
			    var $parent = $field.parents('.form-group');
			  },
			  fields: {
			    group_name: {
			      validators: {
			        notEmpty: {
			          message: 'Please specify the group name.'
			        }
			      }
			    },
			  }
		  }).on('success.form.bv', function (e) {

		    e.preventDefault();

		    selected_employees = employee_table.rows('.selected').data();

		    if (selected_employees.length == 0) {
		      BootstrapDialog.show({
		        type: BootstrapDialog.TYPE_WARNING,
		        title: 'Create group',
		        message: 'Please select the employees who will be assigned to group.',
		        buttons: [{
		          label: 'OK',
		          action: function (dialogRef) {
		            dialogRef.close();
		          }
		        }]
		      });
		      modal.find('.btn-CreateGroup').prop('disabled', false);

		      return false;
		    }

		    employee_ids = '';
		    for (i = 0; i < selected_employees.length; i++) {
		    	if (employee_ids == '') {
		    		employee_ids = selected_employees[i].DT_RowId;
		    	}
		    	else {
		    		employee_ids = employee_ids + ';' + selected_employees[i].DT_RowId;
		    	}
		    }

		    var data = $(this).serializeArray();
		    data.push({name:"action", value:"create_new_group"});
		    data.push({name:"employee_ids", value:employee_ids});
		    data.push({name:"csrfmiddlewaretoken", value:getCookie('csrftoken')});

		  	$.ajax({
		      "type": 'POST',
		      "url": '/team',
		      "data": data,
		      "success": function (response, textStatus, jqXHR) {
		        window.location.href = "/team";
		      },
		      "error": function (response, textStatus, jqXHR) {
		        var result_message = JSON.parse(response.responseText);

		        BootstrapDialog.show({
		          type: BootstrapDialog.TYPE_WARNING,
		          title: 'Create group',
		          message: result_message.message,
		          buttons: [{
		            label: 'OK',
		            action: function (dialogRef) {
		              dialogRef.close();
		            }
		          }]
		        });
		      }
		    });
		  });

		  modal.modal('show');
		 }

		 function UpdateGroupRelatedControlStatus(group_name) {
		   if (group_name.toLowerCase() == 'everyone') {
		  	 $('.users').find('.btnDeleteUserFromGroup').addClass('hidden');
		     $('.section-team .field-edit-group-btn').addClass('hidden');
		   }
		   else {
		  	 $('.users').find('.btnDeleteUserFromGroup').removeClass('hidden');
		     $('.section-team .field-edit-group-btn').removeClass('hidden');
		   }
		 }

		 // debounce so filtering doesn't happen every millisecond
		 function debounce( fn, threshold ) {
		   var timeout;
		   return function debounced() {
		     if (timeout) {
		       clearTimeout( timeout );
		     }

		     function delayed() {
		       fn();
		       timeout = null;
		     }
		     timeout = setTimeout( delayed, threshold || 100 );
		   }
		 }

		 $(".panel-default > .panel-collapse").on('shown.bs.collapse', function () {
		   var group_name = $(this).parent().find('a').text().trim();

		   // Update group name field on the page
		   $('#group_name').html( group_name );
		   $('input[name=new_group_name]').val(group_name);

		   // Update the status of the button for deleting employee from group
		   UpdateGroupRelatedControlStatus(group_name);

		   $('select#field-others').selectpicker('val', group_name);
		   $('select#field-others').trigger('change');

		   // Update table/list view
		   users_table.columns(6).search('group=' + group_name).draw();
		 });

		 $("#sidebar_everyone").on('shown.bs.collapse', function () {
		   $('.filters-controls > select').selectpicker('val', '');
		   $('.filters-controls > select').trigger('change');

		   // Update table/list view
		   users_table.columns().search('').draw();
		 });

		 // Show users in list view instead of grid view
		 $('#grid_view').click(function(){
		   $('#list_view').removeClass('disabled');
		   $(this).addClass('disabled');

		   $('.users.grid').removeClass('hidden');
		   $('.users.table').addClass('hidden');

		   $('.filters-team').removeClass('hidden');
		   $('.navbar-form[role="search"]').removeClass('hidden');
		   return false;
		 });

		 $('#list_view').click(function(){
		   $('#grid_view').removeClass('disabled');
		   $(this).addClass('disabled');

		   $('.users.table').removeClass('hidden');
		   $('.users.grid').addClass('hidden');

		   $('.filters-team').addClass('hidden');
		   $('.navbar-form[role="search"]').addClass('hidden');
		   return false;
		 });

		 var users_table = $('#users_table').DataTable({
		   "paging": false,
		   "searching": true,
		 });
</script>
</html>