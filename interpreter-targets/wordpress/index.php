<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Profiles &bull; phpBB&reg; QuickInstall</title>

<link href="style/assets/css/qi_bootstrap.min.css?v=1.5.0" rel="stylesheet" media="screen">
<link href="style/assets/css/qi_style.css?v=1.5.0" rel="stylesheet" media="screen">
</head>

<body class="ltr" data-spy="scroll" data-target="#sidebar">

<nav class="navbar navbar-dark sticky-top navbar-expand-md bg-primary mb-2">
	<span class="navbar-brand"><span class="phpbb-logo">QuickInstall</span></span>  &nbsp; <a href="https://www.phpbb.com/customise/db/download/190041" title="QI 1.6.1 is available. You are using QI 1.5.0. Click to download the latest version." class="btn btn-danger">Update available <span class="badge badge-light">1.6.1</span></a>	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse justify-content-end" id="navbar">
		<ul class="navbar-nav mt-2 mt-md-0">
						<li class="nav-item active"><a class="nav-link" href="./index.php?page=settings"><span>Profiles</span></a></li>
			<li class="nav-item"><a class="nav-link" href="./index.php?page=docs"><span>Documentation</span></a></li>
			<li class="nav-item"><a class="nav-link" href="./index.php?page=phpinfo"><span>PHP info</span></a></li>
		</ul>
	</div>
</nav>

<div id="back-top" class="container-fluid anchor">
	<div class="row">
		<div class="col-md-3 col-lg-2 sidebar d-none d-md-block" id="sidebar" role="navigation">
							<h5>Settings</h5>
<ul class="nav flex-column">
	<li class="nav-item py-1"><a class="nav-link" href="#back-top"><svg class="bi icon" width="16" height="16" fill="currentColor"><use xlink:href="style/assets/img/bootstrap-icons.svg#arrow-90deg-up"/></svg> Back to the top</a></li>
	<li class="nav-item py-1"><a class="nav-link" href="#profiles"><svg class="bi icon" width="16" height="16" fill="currentColor"><use xlink:href="style/assets/img/bootstrap-icons.svg#collection"/></svg> Profiles</a></li>
	<li class="nav-item py-1"><a class="nav-link" href="#qi-settings"><svg class="bi icon" width="16" height="16" fill="currentColor"><use xlink:href="style/assets/img/bootstrap-icons.svg#lightning-fill"/></svg> QuickInstall</a></li>
	<li class="nav-item py-1"><a class="nav-link" href="#db-settings"><svg class="bi icon" width="16" height="16" fill="currentColor"><use xlink:href="style/assets/img/bootstrap-icons.svg#clipboard-data"/></svg> Database</a></li>
	<li class="nav-item py-1"><a class="nav-link" href="#server-settings"><svg class="bi icon" width="16" height="16" fill="currentColor"><use xlink:href="style/assets/img/bootstrap-icons.svg#hdd-network"/></svg> Server</a></li>
	<li class="nav-item py-1"><a class="nav-link" href="#admin-settings"><svg class="bi icon" width="16" height="16" fill="currentColor"><use xlink:href="style/assets/img/bootstrap-icons.svg#person-circle"/></svg> Admin account</a></li>
	<li class="nav-item py-1"><a class="nav-link" href="#config-settings"><svg class="bi icon" width="16" height="16" fill="currentColor"><use xlink:href="style/assets/img/bootstrap-icons.svg#sliders"/></svg> Board configuration</a></li>
	<li class="nav-item py-1"><a class="nav-link" href="#email-settings"><svg class="bi icon" width="16" height="16" fill="currentColor"><use xlink:href="style/assets/img/bootstrap-icons.svg#envelope"/></svg> Board E-mail</a></li>
	<li class="nav-item py-1"><a class="nav-link" href="#populate-settings"><svg class="bi icon" width="16" height="16" fill="currentColor"><use xlink:href="style/assets/img/bootstrap-icons.svg#people"/></svg> Populate options</a></li>
	<li class="nav-item py-1"><a class="nav-link" href="#misc-settings"><svg class="bi icon" width="16" height="16" fill="currentColor"><use xlink:href="style/assets/img/bootstrap-icons.svg#gear"/></svg> Install options</a></li>
	<li class="nav-item py-1"><a class="nav-link" href="#save-settings"><svg class="bi icon" width="16" height="16" fill="currentColor"><use xlink:href="style/assets/img/bootstrap-icons.svg#arrow-down-circle"/></svg> Save profile</a></li>
</ul>
					</div>
		<div class="col-md-9 ml-sm-auto col-lg-10 px-5">
			<div id="main">

	<h1>Install QuickInstall</h1>
	<p>Welcome to QuickInstall, a tool for quickly installing phpBB boards for testing and development.<br /><br />Some default settings have been loaded below. The only fields you should enter are <code>Database user</code> and <code>Database password</code> if you want those to be stored by QuickInstall. But it is also a good idea to check the rest of the settings.<br /><br />Make sure the <code>boards</code>, <code>cache</code> and <code>settings</code> directories exist in the QuickInstall root directory and are writable by PHP.<br /><br />Once you save these settings they will be stored as the &quot;default&quot; profile. Optionally, you may enter your own unique profile name in the <code>Save as new profile</code> field.</p>
	<div class="alert alert-warning">QuickInstall is only intended to be used locally and should not be used on a web server accessible via the internet (public web server). <strong>If you decide to use it on a public web server it is entirely at your own risk.</strong> There is no support provided for using QuickInstall on public web servers.</div>



<form method="post" action="./index.php?page=settings&amp;mode=update_settings">
	<section id="qi-settings" class="anchor">
		<div class="card bg-light mb-3">
			<div class="card-body">
				<fieldset>
					<legend>QuickInstall</legend>
					<div class="mb-3 row">
						<label for="qi_lang" class="col-md-5 col-form-label">Select QuickInstall language:<span class="form-text text-muted">Select a language for QuickInstall. The available languages are stored in the directory <code>language/</code></span></label>
						<div class="col-md-7">
							<select id="qi_lang" name="qi_config[qi_lang]" class="custom-select" data-load-selection="index.php?page=settings&amp;lang=">
																	<option value="en"selected="selected">British English</option>
															</select>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="cache_dir" class="col-md-5 col-form-label">Cache directory:<span class="form-text text-muted">The directory where QuickInstall stores temporary files. PHP needs to have write permissions to this directory. <span class="badge badge-secondary">Required</span></span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="cache_dir" name="qi_config[cache_dir]" value="cache/"></div>
					</div>
					<div class="mb-3 row">
						<label for="boards_dir" class="col-md-5 col-form-label">Boards directory:<span class="form-text text-muted">The directory where your boards will be created. PHP needs to have write permissions to this directory. <span class="badge badge-secondary">Required</span></span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="boards_dir" name="qi_config[boards_dir]" value="boards/"></div>
					</div>
					<div class="mb-3 row">
						<label for="boards_url" class="col-md-5 col-form-label">Boards URL prefix:<span class="form-text text-muted">URL prefix to the boards directory. If you specified an absolute directory in the boards directory setting above, you may need to provide a domain and/or path here that leads to the boards directory. If boards directory is a relative path, you may just copy it here. <span class="badge badge-secondary">Required</span></span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="boards_url" name="qi_config[boards_url]" value="boards/"></div>
					</div>
					<div class="mb-3 row">
						<label class="col-md-5 col-form-label">Make files world writable:<span class="form-text text-muted">Set files, <code>config.php</code>, and directories world writable by default. This setting has no impact on Windows systems older than Win7. This can be changed when you create a board.</span></label>
						<div class="col-md-7">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[make_writable]" id="qi_config[make_writable]1" value="1">
								<label class="form-check-label" for="qi_config[make_writable]1">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[make_writable]" id="qi_config[make_writable]0" value="0" checked="checked">
								<label class="form-check-label" for="qi_config[make_writable]0">No</label>
							</div>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="grant_permissions" class="col-md-5 col-form-label">Grant additional permissions:<span class="form-text text-muted">e.g., 0060 for group read/write. This setting has no impact on Windows systems older than Win7.</span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="grant_permissions" name="qi_config[grant_permissions]" value=""></div>
					</div>
				</fieldset>
			</div>
		</div>
	</section>

	<section id="db-settings" class="anchor">
		<div class="card bg-light mb-3">
			<div class="card-body">
				<fieldset>
					<legend>Database</legend>
					<div class="mb-3 row">
						<label for="dbms" class="col-md-5 col-form-label">Database type:<span class="form-text text-muted">Your database system. If you are unsure try MySQLi.</span></label>
						<div class="col-md-7">
							<select name="qi_config[dbms]" id="dbms" class="custom-select">
																	<option value="mysqli" selected="selected">MySQLi</option>
																	<option value="sqlite3">SQLite3</option>
															</select>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="dbhost" class="col-md-5 col-form-label">Database server hostname:<span class="form-text text-muted">Usually <code>localhost</code> For SQLite, enter the full path to a directory where your web server has write permissions. <span class="badge badge-secondary">Required</span></span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="dbhost" name="qi_config[dbhost]" value="localhost"></div>
					</div>
					<div class="mb-3 row">
						<label for="dbport" class="col-md-5 col-form-label">Database server port:<span class="form-text text-muted">Leave this blank unless you know your web server operates on a non-standard port.</span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="dbport" name="qi_config[dbport]" value=""></div>
					</div>
					<div class="mb-3 row">
						<label for="dbuser" class="col-md-5 col-form-label">Database username:<span class="form-text text-muted">Your database user. This needs to be a user with permissions to create new databases. If you leave this empty you will have to fill it in when you create a board. <strong>Note: QuickInstall stores passwords and usernames as plain text.</strong></span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="dbuser" name="qi_config[dbuser]" value=""></div>
					</div>
					<div class="mb-3 row">
						<label for="dbpasswd" class="col-md-5 col-form-label">Database password:<span class="form-text text-muted">The password for your database user. If you leave this empty you will have to fill it in when you create a board. <strong>Note: QuickInstall stores passwords and usernames as plain text.</strong></span></label>
						<div class="col-md-7">
							<input class="form-control" type="password" id="dbpasswd" name="qi_config[dbpasswd]" value="">
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="no_dbpasswd" name="qi_config[no_dbpasswd]" value="1">
								<label class="custom-control-label" for="no_dbpasswd">No password</label>
							</div>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="db_prefix" class="col-md-5 col-form-label">Database prefix:<span class="form-text text-muted">This prefix is added to database names to avoid overwriting databases not used by QuickInstall. <span class="badge badge-secondary">Required</span></span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="db_prefix" name="qi_config[db_prefix]" value="qi_"></div>
					</div>
					<div class="mb-3 row">
						<label for="table_prefix" class="col-md-5 col-form-label">Table prefix:<span class="form-text text-muted">This prefix will be added to your board’s database table names. This can be changed when you create a board. <span class="badge badge-secondary">Required</span></span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="table_prefix" name="qi_config[table_prefix]" value="phpbb_"></div>
					</div>
				</fieldset>
			</div>
		</div>
	</section>

	<section id="server-settings" class="anchor">
		<div class="card bg-light mb-3">
			<div class="card-body">
				<fieldset>
					<legend>Server</legend>
					<div class="mb-3 row">
						<label for="server_name" class="col-md-5 col-form-label">Server name:<span class="form-text text-muted">Usually <code>localhost</code> since QuickInstall is <strong>not</strong> intended for public servers. <span class="badge badge-secondary">Required</span></span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="server_name" name="qi_config[server_name]" value="localhost"></div>
					</div>
					<div class="mb-3 row">
						<label for="server_port" class="col-md-5 col-form-label">Server port:<span class="form-text text-muted">Usually <code>80</code>. <span class="badge badge-secondary">Required</span></span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="server_port" name="qi_config[server_port]" value="80"></div>
					</div>
					<div class="mb-3 row">
						<label for="cookie_domain" class="col-md-5 col-form-label">Cookie domain:<span class="form-text text-muted">Usually <code>localhost</code>.</span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="cookie_domain" name="qi_config[cookie_domain]" value=""></div>
					</div>
					<div class="mb-3 row">
						<label class="col-md-5 col-form-label">Cookie secure:<span class="form-text text-muted">If your server is running via SSL set this to yes, otherwise leave this set to no to prevent server errors during redirects.</span></label>
						<div class="col-md-7">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[cookie_secure]" id="qi_config[cookie_secure]1" value="1">
								<label class="form-check-label" for="qi_config[cookie_secure]1">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[cookie_secure]" id="qi_config[cookie_secure]0" value="0" checked="checked">
								<label class="form-check-label" for="qi_config[cookie_secure]0">No</label>
							</div>
						</div>
					</div>
				</fieldset>
			</div>
		</div>
	</section>

	<section id="admin-settings" class="anchor">
		<div class="card bg-light mb-3">
			<div class="card-body">
				<fieldset>
					<legend>Admin account</legend>
					<div class="mb-3 row">
						<label for="admin_name" class="col-md-5 col-form-label">Administrator username:<span class="form-text text-muted">The username to assign to the admin account created for your boards. If you leave this empty you will have to fill it in when you create a board. <strong>Note: QuickInstall stores passwords and usernames as plain text.</strong></span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="admin_name" name="qi_config[admin_name]" value="admin"></div>
					</div>
					<div class="mb-3 row">
						<label for="admin_pass" class="col-md-5 col-form-label">Administrator password:<span class="form-text text-muted">The password to assign to the admin account created for your boards. If you leave this empty you will have to fill it in when you create a board. <strong>Note: QuickInstall stores passwords and usernames as plain text.</strong></span></label>
						<div class="col-md-7"><input class="form-control" type="password" id="admin_pass" name="qi_config[admin_pass]" value="password"></div>
					</div>
					<div class="mb-3 row">
						<label for="admin_email" class="col-md-5 col-form-label">Administrator email:<span class="form-text text-muted">The email to assign to the admin account created for your boards. <span class="badge badge-secondary">Required</span></span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="admin_email" name="qi_config[admin_email]" value="qi_admin@phpbb-quickinstall.tld"></div>
					</div>
				</fieldset>
			</div>
		</div>
	</section>

	<section id="config-settings" class="anchor">
		<div class="card bg-light mb-3">
			<div class="card-body">
				<fieldset>
					<legend>Board configuration</legend>
					<div class="mb-3 row">
						<label for="site_name" class="col-md-5 col-form-label">Site name:<span class="form-text text-muted">The default site name that will be used for your boards. This can be changed when you create a board. <span class="badge badge-secondary">Required</span></span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="site_name" name="qi_config[site_name]" value="Testing Board"></div>
					</div>
					<div class="mb-3 row">
						<label for="site_desc" class="col-md-5 col-form-label">Site description:<span class="form-text text-muted">The default description for your boards. This can be changed when you create a board.</span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="site_desc" name="qi_config[site_desc]" value="QuickInstall sandbox"></div>
					</div>
					<div class="mb-3 row">
						<label for="default_lang" class="col-md-5 col-form-label">Default language:<span class="form-text text-muted">The default language that will be used for your boards. Language packs need to be in <code>sources/phpBB3/language/</code> to be available in this list.</span></label>
						<div class="col-md-7">
							<select class="custom-select" id="default_lang" name="qi_config[default_lang]">
																	<option value="en"selected="selected">British English</option>
															</select>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="qi_tz" class="col-md-5 col-form-label">Time zone:<span class="form-text text-muted">Set the default time zone for your boards.</span></label>
						<div class="col-md-7">
							<select name="qi_config[qi_tz]" id="qi_tz" class="custom-select">
								<option value="">Select timezone</option>
								<optgroup label="UTC-11:00 - 10 May 2021, 05:17"><option title="UTC-11:00 - Pacific/Midway" value="Pacific/Midway">Pacific/Midway</option><option title="UTC-11:00 - Pacific/Niue" value="Pacific/Niue">Pacific/Niue</option><option title="UTC-11:00 - Pacific/Pago Pago" value="Pacific/Pago_Pago">Pacific/Pago Pago</option></optgroup><optgroup label="UTC-10:00 - 10 May 2021, 06:17"><option title="UTC-10:00 - Pacific/Honolulu" value="Pacific/Honolulu">Pacific/Honolulu</option><option title="UTC-10:00 - Pacific/Rarotonga" value="Pacific/Rarotonga">Pacific/Rarotonga</option><option title="UTC-10:00 - Pacific/Tahiti" value="Pacific/Tahiti">Pacific/Tahiti</option></optgroup><optgroup label="UTC-09:30 - 10 May 2021, 06:47"><option title="UTC-09:30 - Pacific/Marquesas" value="Pacific/Marquesas">Pacific/Marquesas</option></optgroup><optgroup label="UTC-09:00 - 10 May 2021, 07:17"><option title="UTC-09:00 - America/Adak" value="America/Adak">America/Adak</option><option title="UTC-09:00 - Pacific/Gambier" value="Pacific/Gambier">Pacific/Gambier</option></optgroup><optgroup label="UTC-08:00 - 10 May 2021, 08:17"><option title="UTC-08:00 - America/Anchorage" value="America/Anchorage">America/Anchorage</option><option title="UTC-08:00 - America/Juneau" value="America/Juneau">America/Juneau</option><option title="UTC-08:00 - America/Metlakatla" value="America/Metlakatla">America/Metlakatla</option><option title="UTC-08:00 - America/Nome" value="America/Nome">America/Nome</option><option title="UTC-08:00 - America/Sitka" value="America/Sitka">America/Sitka</option><option title="UTC-08:00 - America/Yakutat" value="America/Yakutat">America/Yakutat</option><option title="UTC-08:00 - Pacific/Pitcairn" value="Pacific/Pitcairn">Pacific/Pitcairn</option></optgroup><optgroup label="UTC-07:00 - 10 May 2021, 09:17"><option title="UTC-07:00 - America/Creston" value="America/Creston">America/Creston</option><option title="UTC-07:00 - America/Dawson" value="America/Dawson">America/Dawson</option><option title="UTC-07:00 - America/Dawson Creek" value="America/Dawson_Creek">America/Dawson Creek</option><option title="UTC-07:00 - America/Fort_Nelson" value="America/Fort_Nelson">America/Fort_Nelson</option><option title="UTC-07:00 - America/Hermosillo" value="America/Hermosillo">America/Hermosillo</option><option title="UTC-07:00 - America/Los Angeles" value="America/Los_Angeles">America/Los Angeles</option><option title="UTC-07:00 - America/Phoenix" value="America/Phoenix">America/Phoenix</option><option title="UTC-07:00 - America/Tijuana" value="America/Tijuana">America/Tijuana</option><option title="UTC-07:00 - America/Vancouver" value="America/Vancouver">America/Vancouver</option><option title="UTC-07:00 - America/Whitehorse" value="America/Whitehorse">America/Whitehorse</option></optgroup><optgroup label="UTC-06:00 - 10 May 2021, 10:17"><option title="UTC-06:00 - America/Belize" value="America/Belize">America/Belize</option><option title="UTC-06:00 - America/Boise" value="America/Boise">America/Boise</option><option title="UTC-06:00 - America/Cambridge Bay" value="America/Cambridge_Bay">America/Cambridge Bay</option><option title="UTC-06:00 - America/Chihuahua" value="America/Chihuahua">America/Chihuahua</option><option title="UTC-06:00 - America/Costa Rica" value="America/Costa_Rica">America/Costa Rica</option><option title="UTC-06:00 - America/Denver" value="America/Denver">America/Denver</option><option title="UTC-06:00 - America/Edmonton" value="America/Edmonton">America/Edmonton</option><option title="UTC-06:00 - America/El Salvador" value="America/El_Salvador">America/El Salvador</option><option title="UTC-06:00 - America/Guatemala" value="America/Guatemala">America/Guatemala</option><option title="UTC-06:00 - America/Inuvik" value="America/Inuvik">America/Inuvik</option><option title="UTC-06:00 - America/Managua" value="America/Managua">America/Managua</option><option title="UTC-06:00 - America/Mazatlan" value="America/Mazatlan">America/Mazatlan</option><option title="UTC-06:00 - America/Ojinaga" value="America/Ojinaga">America/Ojinaga</option><option title="UTC-06:00 - America/Regina" value="America/Regina">America/Regina</option><option title="UTC-06:00 - America/Swift Current" value="America/Swift_Current">America/Swift Current</option><option title="UTC-06:00 - America/Tegucigalpa" value="America/Tegucigalpa">America/Tegucigalpa</option><option title="UTC-06:00 - America/Yellowknife" value="America/Yellowknife">America/Yellowknife</option><option title="UTC-06:00 - Pacific/Easter" value="Pacific/Easter">Pacific/Easter</option><option title="UTC-06:00 - Pacific/Galapagos" value="Pacific/Galapagos">Pacific/Galapagos</option></optgroup><optgroup label="UTC-05:00 - 10 May 2021, 11:17"><option title="UTC-05:00 - America/Atikokan" value="America/Atikokan">America/Atikokan</option><option title="UTC-05:00 - America/Bahia Banderas" value="America/Bahia_Banderas">America/Bahia Banderas</option><option title="UTC-05:00 - America/Bogota" value="America/Bogota">America/Bogota</option><option title="UTC-05:00 - America/Cancun" value="America/Cancun">America/Cancun</option><option title="UTC-05:00 - America/Cayman" value="America/Cayman">America/Cayman</option><option title="UTC-05:00 - America/Chicago" value="America/Chicago">America/Chicago</option><option title="UTC-05:00 - America/Eirunepe" value="America/Eirunepe">America/Eirunepe</option><option title="UTC-05:00 - America/Guayaquil" value="America/Guayaquil">America/Guayaquil</option><option title="UTC-05:00 - America/Indiana/Knox" value="America/Indiana/Knox">America/Indiana/Knox</option><option title="UTC-05:00 - America/Indiana/Tell City" value="America/Indiana/Tell_City">America/Indiana/Tell City</option><option title="UTC-05:00 - America/Jamaica" value="America/Jamaica">America/Jamaica</option><option title="UTC-05:00 - America/Lima" value="America/Lima">America/Lima</option><option title="UTC-05:00 - America/Matamoros" value="America/Matamoros">America/Matamoros</option><option title="UTC-05:00 - America/Menominee" value="America/Menominee">America/Menominee</option><option title="UTC-05:00 - America/Merida" value="America/Merida">America/Merida</option><option title="UTC-05:00 - America/Mexico City" value="America/Mexico_City">America/Mexico City</option><option title="UTC-05:00 - America/Monterrey" value="America/Monterrey">America/Monterrey</option><option title="UTC-05:00 - America/North Dakota/Beulah" value="America/North_Dakota/Beulah">America/North Dakota/Beulah</option><option title="UTC-05:00 - America/North Dakota/Center" value="America/North_Dakota/Center">America/North Dakota/Center</option><option title="UTC-05:00 - America/North Dakota/New Salem" value="America/North_Dakota/New_Salem">America/North Dakota/New Salem</option><option title="UTC-05:00 - America/Panama" value="America/Panama">America/Panama</option><option title="UTC-05:00 - America/Rainy River" value="America/Rainy_River">America/Rainy River</option><option title="UTC-05:00 - America/Rankin Inlet" value="America/Rankin_Inlet">America/Rankin Inlet</option><option title="UTC-05:00 - America/Resolute" value="America/Resolute">America/Resolute</option><option title="UTC-05:00 - America/Rio Branco" value="America/Rio_Branco">America/Rio Branco</option><option title="UTC-05:00 - America/Winnipeg" value="America/Winnipeg">America/Winnipeg</option></optgroup><optgroup label="UTC-04:00 - 10 May 2021, 12:17"><option title="UTC-04:00 - America/Anguilla" value="America/Anguilla">America/Anguilla</option><option title="UTC-04:00 - America/Antigua" value="America/Antigua">America/Antigua</option><option title="UTC-04:00 - America/Aruba" value="America/Aruba">America/Aruba</option><option title="UTC-04:00 - America/Asuncion" value="America/Asuncion">America/Asuncion</option><option title="UTC-04:00 - America/Barbados" value="America/Barbados">America/Barbados</option><option title="UTC-04:00 - America/Blanc-Sablon" value="America/Blanc-Sablon">America/Blanc-Sablon</option><option title="UTC-04:00 - America/Boa Vista" value="America/Boa_Vista">America/Boa Vista</option><option title="UTC-04:00 - America/Campo Grande" value="America/Campo_Grande">America/Campo Grande</option><option title="UTC-04:00 - America/Caracas" value="America/Caracas">America/Caracas</option><option title="UTC-04:00 - America/Cuiaba" value="America/Cuiaba">America/Cuiaba</option><option title="UTC-04:00 - America/Curacao" value="America/Curacao">America/Curacao</option><option title="UTC-04:00 - America/Detroit" value="America/Detroit">America/Detroit</option><option title="UTC-04:00 - America/Dominica" value="America/Dominica">America/Dominica</option><option title="UTC-04:00 - America/Grand Turk" value="America/Grand_Turk">America/Grand Turk</option><option title="UTC-04:00 - America/Grenada" value="America/Grenada">America/Grenada</option><option title="UTC-04:00 - America/Guadeloupe" value="America/Guadeloupe">America/Guadeloupe</option><option title="UTC-04:00 - America/Guyana" value="America/Guyana">America/Guyana</option><option title="UTC-04:00 - America/Havana" value="America/Havana">America/Havana</option><option title="UTC-04:00 - America/Indiana/Indianapolis" value="America/Indiana/Indianapolis">America/Indiana/Indianapolis</option><option title="UTC-04:00 - America/Indiana/Marengo" value="America/Indiana/Marengo">America/Indiana/Marengo</option><option title="UTC-04:00 - America/Indiana/Petersburg" value="America/Indiana/Petersburg">America/Indiana/Petersburg</option><option title="UTC-04:00 - America/Indiana/Vevay" value="America/Indiana/Vevay">America/Indiana/Vevay</option><option title="UTC-04:00 - America/Indiana/Vincennes" value="America/Indiana/Vincennes">America/Indiana/Vincennes</option><option title="UTC-04:00 - America/Indiana/Winamac" value="America/Indiana/Winamac">America/Indiana/Winamac</option><option title="UTC-04:00 - America/Iqaluit" value="America/Iqaluit">America/Iqaluit</option><option title="UTC-04:00 - America/Kentucky/Louisville" value="America/Kentucky/Louisville">America/Kentucky/Louisville</option><option title="UTC-04:00 - America/Kentucky/Monticello" value="America/Kentucky/Monticello">America/Kentucky/Monticello</option><option title="UTC-04:00 - America/Kralendijk" value="America/Kralendijk">America/Kralendijk</option><option title="UTC-04:00 - America/La Paz" value="America/La_Paz">America/La Paz</option><option title="UTC-04:00 - America/Lower Princes" value="America/Lower_Princes">America/Lower Princes</option><option title="UTC-04:00 - America/Manaus" value="America/Manaus">America/Manaus</option><option title="UTC-04:00 - America/Marigot" value="America/Marigot">America/Marigot</option><option title="UTC-04:00 - America/Martinique" value="America/Martinique">America/Martinique</option><option title="UTC-04:00 - America/Montserrat" value="America/Montserrat">America/Montserrat</option><option title="UTC-04:00 - America/Nassau" value="America/Nassau">America/Nassau</option><option title="UTC-04:00 - America/New York" value="America/New_York">America/New York</option><option title="UTC-04:00 - America/Nipigon" value="America/Nipigon">America/Nipigon</option><option title="UTC-04:00 - America/Pangnirtung" value="America/Pangnirtung">America/Pangnirtung</option><option title="UTC-04:00 - America/Port-au-Prince" value="America/Port-au-Prince">America/Port-au-Prince</option><option title="UTC-04:00 - America/Port of Spain" value="America/Port_of_Spain">America/Port of Spain</option><option title="UTC-04:00 - America/Porto Velho" value="America/Porto_Velho">America/Porto Velho</option><option title="UTC-04:00 - America/Puerto Rico" value="America/Puerto_Rico">America/Puerto Rico</option><option title="UTC-04:00 - America/Santiago" value="America/Santiago">America/Santiago</option><option title="UTC-04:00 - America/Santo Domingo" value="America/Santo_Domingo">America/Santo Domingo</option><option title="UTC-04:00 - America/St. Barthelemy" value="America/St_Barthelemy">America/St. Barthelemy</option><option title="UTC-04:00 - America/St. Kitts" value="America/St_Kitts">America/St. Kitts</option><option title="UTC-04:00 - America/St. Lucia" value="America/St_Lucia">America/St. Lucia</option><option title="UTC-04:00 - America/St. Thomas" value="America/St_Thomas">America/St. Thomas</option><option title="UTC-04:00 - America/St. Vincent" value="America/St_Vincent">America/St. Vincent</option><option title="UTC-04:00 - America/Thunder Bay" value="America/Thunder_Bay">America/Thunder Bay</option><option title="UTC-04:00 - America/Toronto" value="America/Toronto">America/Toronto</option><option title="UTC-04:00 - America/Tortola" value="America/Tortola">America/Tortola</option></optgroup><optgroup label="UTC-03:00 - 10 May 2021, 13:17"><option title="UTC-03:00 - America/Araguaina" value="America/Araguaina">America/Araguaina</option><option title="UTC-03:00 - America/Argentina/Buenos Aires" value="America/Argentina/Buenos_Aires">America/Argentina/Buenos Aires</option><option title="UTC-03:00 - America/Argentina/Catamarca" value="America/Argentina/Catamarca">America/Argentina/Catamarca</option><option title="UTC-03:00 - America/Argentina/Cordoba" value="America/Argentina/Cordoba">America/Argentina/Cordoba</option><option title="UTC-03:00 - America/Argentina/Jujuy" value="America/Argentina/Jujuy">America/Argentina/Jujuy</option><option title="UTC-03:00 - America/Argentina/La Rioja" value="America/Argentina/La_Rioja">America/Argentina/La Rioja</option><option title="UTC-03:00 - America/Argentina/Mendoza" value="America/Argentina/Mendoza">America/Argentina/Mendoza</option><option title="UTC-03:00 - America/Argentina/Rio Gallegos" value="America/Argentina/Rio_Gallegos">America/Argentina/Rio Gallegos</option><option title="UTC-03:00 - America/Argentina/Salta" value="America/Argentina/Salta">America/Argentina/Salta</option><option title="UTC-03:00 - America/Argentina/San Juan" value="America/Argentina/San_Juan">America/Argentina/San Juan</option><option title="UTC-03:00 - America/Argentina/San Luis" value="America/Argentina/San_Luis">America/Argentina/San Luis</option><option title="UTC-03:00 - America/Argentina/Tucuman" value="America/Argentina/Tucuman">America/Argentina/Tucuman</option><option title="UTC-03:00 - America/Argentina/Ushuaia" value="America/Argentina/Ushuaia">America/Argentina/Ushuaia</option><option title="UTC-03:00 - America/Bahia" value="America/Bahia">America/Bahia</option><option title="UTC-03:00 - America/Belem" value="America/Belem">America/Belem</option><option title="UTC-03:00 - America/Cayenne" value="America/Cayenne">America/Cayenne</option><option title="UTC-03:00 - America/Fortaleza" value="America/Fortaleza">America/Fortaleza</option><option title="UTC-03:00 - America/Glace Bay" value="America/Glace_Bay">America/Glace Bay</option><option title="UTC-03:00 - America/Goose Bay" value="America/Goose_Bay">America/Goose Bay</option><option title="UTC-03:00 - America/Halifax" value="America/Halifax">America/Halifax</option><option title="UTC-03:00 - America/Maceio" value="America/Maceio">America/Maceio</option><option title="UTC-03:00 - America/Moncton" value="America/Moncton">America/Moncton</option><option title="UTC-03:00 - America/Montevideo" value="America/Montevideo">America/Montevideo</option><option title="UTC-03:00 - America/Paramaribo" value="America/Paramaribo">America/Paramaribo</option><option title="UTC-03:00 - America/Punta_Arenas" value="America/Punta_Arenas">America/Punta_Arenas</option><option title="UTC-03:00 - America/Recife" value="America/Recife">America/Recife</option><option title="UTC-03:00 - America/Santarem" value="America/Santarem">America/Santarem</option><option title="UTC-03:00 - America/Sao Paulo" value="America/Sao_Paulo">America/Sao Paulo</option><option title="UTC-03:00 - America/Thule" value="America/Thule">America/Thule</option><option title="UTC-03:00 - Antarctica/Palmer" value="Antarctica/Palmer">Antarctica/Palmer</option><option title="UTC-03:00 - Antarctica/Rothera" value="Antarctica/Rothera">Antarctica/Rothera</option><option title="UTC-03:00 - Atlantic/Bermuda" value="Atlantic/Bermuda">Atlantic/Bermuda</option><option title="UTC-03:00 - Atlantic/Stanley" value="Atlantic/Stanley">Atlantic/Stanley</option></optgroup><optgroup label="UTC-02:30 - 10 May 2021, 13:47"><option title="UTC-02:30 - America/St. Johns" value="America/St_Johns">America/St. Johns</option></optgroup><optgroup label="UTC-02:00 - 10 May 2021, 14:17"><option title="UTC-02:00 - America/Godthab" value="America/Godthab">America/Godthab</option><option title="UTC-02:00 - America/Miquelon" value="America/Miquelon">America/Miquelon</option><option title="UTC-02:00 - America/Noronha" value="America/Noronha">America/Noronha</option><option title="UTC-02:00 - Atlantic/South Georgia" value="Atlantic/South_Georgia">Atlantic/South Georgia</option></optgroup><optgroup label="UTC-01:00 - 10 May 2021, 15:17"><option title="UTC-01:00 - Atlantic/Cape Verde" value="Atlantic/Cape_Verde">Atlantic/Cape Verde</option></optgroup><optgroup label="UTC+00:00 - 10 May 2021, 16:17"><option title="UTC+00:00 - UTC" value="UTC" selected="selected">UTC</option><option title="UTC+00:00 - Africa/Abidjan" value="Africa/Abidjan">Africa/Abidjan</option><option title="UTC+00:00 - Africa/Accra" value="Africa/Accra">Africa/Accra</option><option title="UTC+00:00 - Africa/Bamako" value="Africa/Bamako">Africa/Bamako</option><option title="UTC+00:00 - Africa/Banjul" value="Africa/Banjul">Africa/Banjul</option><option title="UTC+00:00 - Africa/Bissau" value="Africa/Bissau">Africa/Bissau</option><option title="UTC+00:00 - Africa/Casablanca" value="Africa/Casablanca">Africa/Casablanca</option><option title="UTC+00:00 - Africa/Conakry" value="Africa/Conakry">Africa/Conakry</option><option title="UTC+00:00 - Africa/Dakar" value="Africa/Dakar">Africa/Dakar</option><option title="UTC+00:00 - Africa/El Aaiun" value="Africa/El_Aaiun">Africa/El Aaiun</option><option title="UTC+00:00 - Africa/Freetown" value="Africa/Freetown">Africa/Freetown</option><option title="UTC+00:00 - Africa/Lome" value="Africa/Lome">Africa/Lome</option><option title="UTC+00:00 - Africa/Monrovia" value="Africa/Monrovia">Africa/Monrovia</option><option title="UTC+00:00 - Africa/Nouakchott" value="Africa/Nouakchott">Africa/Nouakchott</option><option title="UTC+00:00 - Africa/Ouagadougou" value="Africa/Ouagadougou">Africa/Ouagadougou</option><option title="UTC+00:00 - Africa/Sao Tome" value="Africa/Sao_Tome">Africa/Sao Tome</option><option title="UTC+00:00 - America/Danmarkshavn" value="America/Danmarkshavn">America/Danmarkshavn</option><option title="UTC+00:00 - America/Scoresbysund" value="America/Scoresbysund">America/Scoresbysund</option><option title="UTC+00:00 - Atlantic/Azores" value="Atlantic/Azores">Atlantic/Azores</option><option title="UTC+00:00 - Atlantic/Reykjavik" value="Atlantic/Reykjavik">Atlantic/Reykjavik</option><option title="UTC+00:00 - Atlantic/St. Helena" value="Atlantic/St_Helena">Atlantic/St. Helena</option></optgroup><optgroup label="UTC+01:00 - 10 May 2021, 17:17"><option title="UTC+01:00 - Africa/Algiers" value="Africa/Algiers">Africa/Algiers</option><option title="UTC+01:00 - Africa/Bangui" value="Africa/Bangui">Africa/Bangui</option><option title="UTC+01:00 - Africa/Brazzaville" value="Africa/Brazzaville">Africa/Brazzaville</option><option title="UTC+01:00 - Africa/Douala" value="Africa/Douala">Africa/Douala</option><option title="UTC+01:00 - Africa/Kinshasa" value="Africa/Kinshasa">Africa/Kinshasa</option><option title="UTC+01:00 - Africa/Lagos" value="Africa/Lagos">Africa/Lagos</option><option title="UTC+01:00 - Africa/Libreville" value="Africa/Libreville">Africa/Libreville</option><option title="UTC+01:00 - Africa/Luanda" value="Africa/Luanda">Africa/Luanda</option><option title="UTC+01:00 - Africa/Malabo" value="Africa/Malabo">Africa/Malabo</option><option title="UTC+01:00 - Africa/Ndjamena" value="Africa/Ndjamena">Africa/Ndjamena</option><option title="UTC+01:00 - Africa/Niamey" value="Africa/Niamey">Africa/Niamey</option><option title="UTC+01:00 - Africa/Porto-Novo" value="Africa/Porto-Novo">Africa/Porto-Novo</option><option title="UTC+01:00 - Africa/Tunis" value="Africa/Tunis">Africa/Tunis</option><option title="UTC+01:00 - Atlantic/Canary" value="Atlantic/Canary">Atlantic/Canary</option><option title="UTC+01:00 - Atlantic/Faroe" value="Atlantic/Faroe">Atlantic/Faroe</option><option title="UTC+01:00 - Atlantic/Madeira" value="Atlantic/Madeira">Atlantic/Madeira</option><option title="UTC+01:00 - Europe/Dublin" value="Europe/Dublin">Europe/Dublin</option><option title="UTC+01:00 - Europe/Guernsey" value="Europe/Guernsey">Europe/Guernsey</option><option title="UTC+01:00 - Europe/Isle of Man" value="Europe/Isle_of_Man">Europe/Isle of Man</option><option title="UTC+01:00 - Europe/Jersey" value="Europe/Jersey">Europe/Jersey</option><option title="UTC+01:00 - Europe/Lisbon" value="Europe/Lisbon">Europe/Lisbon</option><option title="UTC+01:00 - Europe/London" value="Europe/London">Europe/London</option></optgroup><optgroup label="UTC+02:00 - 10 May 2021, 18:17"><option title="UTC+02:00 - Africa/Blantyre" value="Africa/Blantyre">Africa/Blantyre</option><option title="UTC+02:00 - Africa/Bujumbura" value="Africa/Bujumbura">Africa/Bujumbura</option><option title="UTC+02:00 - Africa/Cairo" value="Africa/Cairo">Africa/Cairo</option><option title="UTC+02:00 - Africa/Ceuta" value="Africa/Ceuta">Africa/Ceuta</option><option title="UTC+02:00 - Africa/Gaborone" value="Africa/Gaborone">Africa/Gaborone</option><option title="UTC+02:00 - Africa/Harare" value="Africa/Harare">Africa/Harare</option><option title="UTC+02:00 - Africa/Johannesburg" value="Africa/Johannesburg">Africa/Johannesburg</option><option title="UTC+02:00 - Africa/Khartoum" value="Africa/Khartoum">Africa/Khartoum</option><option title="UTC+02:00 - Africa/Kigali" value="Africa/Kigali">Africa/Kigali</option><option title="UTC+02:00 - Africa/Lubumbashi" value="Africa/Lubumbashi">Africa/Lubumbashi</option><option title="UTC+02:00 - Africa/Lusaka" value="Africa/Lusaka">Africa/Lusaka</option><option title="UTC+02:00 - Africa/Maputo" value="Africa/Maputo">Africa/Maputo</option><option title="UTC+02:00 - Africa/Maseru" value="Africa/Maseru">Africa/Maseru</option><option title="UTC+02:00 - Africa/Mbabane" value="Africa/Mbabane">Africa/Mbabane</option><option title="UTC+02:00 - Africa/Tripoli" value="Africa/Tripoli">Africa/Tripoli</option><option title="UTC+02:00 - Africa/Windhoek" value="Africa/Windhoek">Africa/Windhoek</option><option title="UTC+02:00 - Antarctica/Troll" value="Antarctica/Troll">Antarctica/Troll</option><option title="UTC+02:00 - Arctic/Longyearbyen" value="Arctic/Longyearbyen">Arctic/Longyearbyen</option><option title="UTC+02:00 - Europe/Amsterdam" value="Europe/Amsterdam">Europe/Amsterdam</option><option title="UTC+02:00 - Europe/Andorra" value="Europe/Andorra">Europe/Andorra</option><option title="UTC+02:00 - Europe/Belgrade" value="Europe/Belgrade">Europe/Belgrade</option><option title="UTC+02:00 - Europe/Berlin" value="Europe/Berlin">Europe/Berlin</option><option title="UTC+02:00 - Europe/Bratislava" value="Europe/Bratislava">Europe/Bratislava</option><option title="UTC+02:00 - Europe/Brussels" value="Europe/Brussels">Europe/Brussels</option><option title="UTC+02:00 - Europe/Budapest" value="Europe/Budapest">Europe/Budapest</option><option title="UTC+02:00 - Europe/Busingen" value="Europe/Busingen">Europe/Busingen</option><option title="UTC+02:00 - Europe/Copenhagen" value="Europe/Copenhagen">Europe/Copenhagen</option><option title="UTC+02:00 - Europe/Gibraltar" value="Europe/Gibraltar">Europe/Gibraltar</option><option title="UTC+02:00 - Europe/Kaliningrad" value="Europe/Kaliningrad">Europe/Kaliningrad</option><option title="UTC+02:00 - Europe/Ljubljana" value="Europe/Ljubljana">Europe/Ljubljana</option><option title="UTC+02:00 - Europe/Luxembourg" value="Europe/Luxembourg">Europe/Luxembourg</option><option title="UTC+02:00 - Europe/Madrid" value="Europe/Madrid">Europe/Madrid</option><option title="UTC+02:00 - Europe/Malta" value="Europe/Malta">Europe/Malta</option><option title="UTC+02:00 - Europe/Monaco" value="Europe/Monaco">Europe/Monaco</option><option title="UTC+02:00 - Europe/Oslo" value="Europe/Oslo">Europe/Oslo</option><option title="UTC+02:00 - Europe/Paris" value="Europe/Paris">Europe/Paris</option><option title="UTC+02:00 - Europe/Podgorica" value="Europe/Podgorica">Europe/Podgorica</option><option title="UTC+02:00 - Europe/Prague" value="Europe/Prague">Europe/Prague</option><option title="UTC+02:00 - Europe/Rome" value="Europe/Rome">Europe/Rome</option><option title="UTC+02:00 - Europe/San Marino" value="Europe/San_Marino">Europe/San Marino</option><option title="UTC+02:00 - Europe/Sarajevo" value="Europe/Sarajevo">Europe/Sarajevo</option><option title="UTC+02:00 - Europe/Skopje" value="Europe/Skopje">Europe/Skopje</option><option title="UTC+02:00 - Europe/Stockholm" value="Europe/Stockholm">Europe/Stockholm</option><option title="UTC+02:00 - Europe/Tirane" value="Europe/Tirane">Europe/Tirane</option><option title="UTC+02:00 - Europe/Vaduz" value="Europe/Vaduz">Europe/Vaduz</option><option title="UTC+02:00 - Europe/Vatican" value="Europe/Vatican">Europe/Vatican</option><option title="UTC+02:00 - Europe/Vienna" value="Europe/Vienna">Europe/Vienna</option><option title="UTC+02:00 - Europe/Warsaw" value="Europe/Warsaw">Europe/Warsaw</option><option title="UTC+02:00 - Europe/Zagreb" value="Europe/Zagreb">Europe/Zagreb</option><option title="UTC+02:00 - Europe/Zurich" value="Europe/Zurich">Europe/Zurich</option></optgroup><optgroup label="UTC+03:00 - 10 May 2021, 19:17"><option title="UTC+03:00 - Africa/Addis Ababa" value="Africa/Addis_Ababa">Africa/Addis Ababa</option><option title="UTC+03:00 - Africa/Asmara" value="Africa/Asmara">Africa/Asmara</option><option title="UTC+03:00 - Africa/Dar es Salaam" value="Africa/Dar_es_Salaam">Africa/Dar es Salaam</option><option title="UTC+03:00 - Africa/Djibouti" value="Africa/Djibouti">Africa/Djibouti</option><option title="UTC+03:00 - Africa/Juba" value="Africa/Juba">Africa/Juba</option><option title="UTC+03:00 - Africa/Kampala" value="Africa/Kampala">Africa/Kampala</option><option title="UTC+03:00 - Africa/Mogadishu" value="Africa/Mogadishu">Africa/Mogadishu</option><option title="UTC+03:00 - Africa/Nairobi" value="Africa/Nairobi">Africa/Nairobi</option><option title="UTC+03:00 - Antarctica/Syowa" value="Antarctica/Syowa">Antarctica/Syowa</option><option title="UTC+03:00 - Asia/Aden" value="Asia/Aden">Asia/Aden</option><option title="UTC+03:00 - Asia/Amman" value="Asia/Amman">Asia/Amman</option><option title="UTC+03:00 - Asia/Baghdad" value="Asia/Baghdad">Asia/Baghdad</option><option title="UTC+03:00 - Asia/Bahrain" value="Asia/Bahrain">Asia/Bahrain</option><option title="UTC+03:00 - Asia/Beirut" value="Asia/Beirut">Asia/Beirut</option><option title="UTC+03:00 - Asia/Damascus" value="Asia/Damascus">Asia/Damascus</option><option title="UTC+03:00 - Asia/Famagusta" value="Asia/Famagusta">Asia/Famagusta</option><option title="UTC+03:00 - Asia/Gaza" value="Asia/Gaza">Asia/Gaza</option><option title="UTC+03:00 - Asia/Hebron" value="Asia/Hebron">Asia/Hebron</option><option title="UTC+03:00 - Asia/Jerusalem" value="Asia/Jerusalem">Asia/Jerusalem</option><option title="UTC+03:00 - Asia/Kuwait" value="Asia/Kuwait">Asia/Kuwait</option><option title="UTC+03:00 - Asia/Nicosia" value="Asia/Nicosia">Asia/Nicosia</option><option title="UTC+03:00 - Asia/Qatar" value="Asia/Qatar">Asia/Qatar</option><option title="UTC+03:00 - Asia/Riyadh" value="Asia/Riyadh">Asia/Riyadh</option><option title="UTC+03:00 - Europe/Athens" value="Europe/Athens">Europe/Athens</option><option title="UTC+03:00 - Europe/Bucharest" value="Europe/Bucharest">Europe/Bucharest</option><option title="UTC+03:00 - Europe/Chisinau" value="Europe/Chisinau">Europe/Chisinau</option><option title="UTC+03:00 - Europe/Helsinki" value="Europe/Helsinki">Europe/Helsinki</option><option title="UTC+03:00 - Europe/Istanbul" value="Europe/Istanbul">Europe/Istanbul</option><option title="UTC+03:00 - Europe/Kiev" value="Europe/Kiev">Europe/Kiev</option><option title="UTC+03:00 - Europe/Kirov" value="Europe/Kirov">Europe/Kirov</option><option title="UTC+03:00 - Europe/Mariehamn" value="Europe/Mariehamn">Europe/Mariehamn</option><option title="UTC+03:00 - Europe/Minsk" value="Europe/Minsk">Europe/Minsk</option><option title="UTC+03:00 - Europe/Moscow" value="Europe/Moscow">Europe/Moscow</option><option title="UTC+03:00 - Europe/Riga" value="Europe/Riga">Europe/Riga</option><option title="UTC+03:00 - Europe/Simferopol" value="Europe/Simferopol">Europe/Simferopol</option><option title="UTC+03:00 - Europe/Sofia" value="Europe/Sofia">Europe/Sofia</option><option title="UTC+03:00 - Europe/Tallinn" value="Europe/Tallinn">Europe/Tallinn</option><option title="UTC+03:00 - Europe/Uzhgorod" value="Europe/Uzhgorod">Europe/Uzhgorod</option><option title="UTC+03:00 - Europe/Vilnius" value="Europe/Vilnius">Europe/Vilnius</option><option title="UTC+03:00 - Europe/Zaporozhye" value="Europe/Zaporozhye">Europe/Zaporozhye</option><option title="UTC+03:00 - Indian/Antananarivo" value="Indian/Antananarivo">Indian/Antananarivo</option><option title="UTC+03:00 - Indian/Comoro" value="Indian/Comoro">Indian/Comoro</option><option title="UTC+03:00 - Indian/Mayotte" value="Indian/Mayotte">Indian/Mayotte</option></optgroup><optgroup label="UTC+04:00 - 10 May 2021, 20:17"><option title="UTC+04:00 - Asia/Baku" value="Asia/Baku">Asia/Baku</option><option title="UTC+04:00 - Asia/Dubai" value="Asia/Dubai">Asia/Dubai</option><option title="UTC+04:00 - Asia/Muscat" value="Asia/Muscat">Asia/Muscat</option><option title="UTC+04:00 - Asia/Tbilisi" value="Asia/Tbilisi">Asia/Tbilisi</option><option title="UTC+04:00 - Asia/Yerevan" value="Asia/Yerevan">Asia/Yerevan</option><option title="UTC+04:00 - Europe/Astrakhan" value="Europe/Astrakhan">Europe/Astrakhan</option><option title="UTC+04:00 - Europe/Samara" value="Europe/Samara">Europe/Samara</option><option title="UTC+04:00 - Europe/Saratov" value="Europe/Saratov">Europe/Saratov</option><option title="UTC+04:00 - Europe/Ulyanovsk" value="Europe/Ulyanovsk">Europe/Ulyanovsk</option><option title="UTC+04:00 - Europe/Volgograd" value="Europe/Volgograd">Europe/Volgograd</option><option title="UTC+04:00 - Indian/Mahe" value="Indian/Mahe">Indian/Mahe</option><option title="UTC+04:00 - Indian/Mauritius" value="Indian/Mauritius">Indian/Mauritius</option><option title="UTC+04:00 - Indian/Reunion" value="Indian/Reunion">Indian/Reunion</option></optgroup><optgroup label="UTC+04:30 - 10 May 2021, 20:47"><option title="UTC+04:30 - Asia/Kabul" value="Asia/Kabul">Asia/Kabul</option><option title="UTC+04:30 - Asia/Tehran" value="Asia/Tehran">Asia/Tehran</option></optgroup><optgroup label="UTC+05:00 - 10 May 2021, 21:17"><option title="UTC+05:00 - Antarctica/Mawson" value="Antarctica/Mawson">Antarctica/Mawson</option><option title="UTC+05:00 - Asia/Aqtau" value="Asia/Aqtau">Asia/Aqtau</option><option title="UTC+05:00 - Asia/Aqtobe" value="Asia/Aqtobe">Asia/Aqtobe</option><option title="UTC+05:00 - Asia/Ashgabat" value="Asia/Ashgabat">Asia/Ashgabat</option><option title="UTC+05:00 - Asia/Atyrau" value="Asia/Atyrau">Asia/Atyrau</option><option title="UTC+05:00 - Asia/Dushanbe" value="Asia/Dushanbe">Asia/Dushanbe</option><option title="UTC+05:00 - Asia/Karachi" value="Asia/Karachi">Asia/Karachi</option><option title="UTC+05:00 - Asia/Oral" value="Asia/Oral">Asia/Oral</option><option title="UTC+05:00 - Asia/Qyzylorda" value="Asia/Qyzylorda">Asia/Qyzylorda</option><option title="UTC+05:00 - Asia/Samarkand" value="Asia/Samarkand">Asia/Samarkand</option><option title="UTC+05:00 - Asia/Tashkent" value="Asia/Tashkent">Asia/Tashkent</option><option title="UTC+05:00 - Asia/Yekaterinburg" value="Asia/Yekaterinburg">Asia/Yekaterinburg</option><option title="UTC+05:00 - Indian/Kerguelen" value="Indian/Kerguelen">Indian/Kerguelen</option><option title="UTC+05:00 - Indian/Maldives" value="Indian/Maldives">Indian/Maldives</option></optgroup><optgroup label="UTC+05:30 - 10 May 2021, 21:47"><option title="UTC+05:30 - Asia/Colombo" value="Asia/Colombo">Asia/Colombo</option><option title="UTC+05:30 - Asia/Kolkata" value="Asia/Kolkata">Asia/Kolkata</option></optgroup><optgroup label="UTC+05:45 - 10 May 2021, 22:02"><option title="UTC+05:45 - Asia/Kathmandu" value="Asia/Kathmandu">Asia/Kathmandu</option></optgroup><optgroup label="UTC+06:00 - 10 May 2021, 22:17"><option title="UTC+06:00 - Antarctica/Vostok" value="Antarctica/Vostok">Antarctica/Vostok</option><option title="UTC+06:00 - Asia/Almaty" value="Asia/Almaty">Asia/Almaty</option><option title="UTC+06:00 - Asia/Bishkek" value="Asia/Bishkek">Asia/Bishkek</option><option title="UTC+06:00 - Asia/Dhaka" value="Asia/Dhaka">Asia/Dhaka</option><option title="UTC+06:00 - Asia/Omsk" value="Asia/Omsk">Asia/Omsk</option><option title="UTC+06:00 - Asia/Qostanay" value="Asia/Qostanay">Asia/Qostanay</option><option title="UTC+06:00 - Asia/Thimphu" value="Asia/Thimphu">Asia/Thimphu</option><option title="UTC+06:00 - Asia/Urumqi" value="Asia/Urumqi">Asia/Urumqi</option><option title="UTC+06:00 - Indian/Chagos" value="Indian/Chagos">Indian/Chagos</option></optgroup><optgroup label="UTC+06:30 - 10 May 2021, 22:47"><option title="UTC+06:30 - Asia/Yangon" value="Asia/Yangon">Asia/Yangon</option><option title="UTC+06:30 - Indian/Cocos" value="Indian/Cocos">Indian/Cocos</option></optgroup><optgroup label="UTC+07:00 - 10 May 2021, 23:17"><option title="UTC+07:00 - Antarctica/Davis" value="Antarctica/Davis">Antarctica/Davis</option><option title="UTC+07:00 - Asia/Bangkok" value="Asia/Bangkok">Asia/Bangkok</option><option title="UTC+07:00 - Asia/Barnaul" value="Asia/Barnaul">Asia/Barnaul</option><option title="UTC+07:00 - Asia/Ho Chi Minh" value="Asia/Ho_Chi_Minh">Asia/Ho Chi Minh</option><option title="UTC+07:00 - Asia/Hovd" value="Asia/Hovd">Asia/Hovd</option><option title="UTC+07:00 - Asia/Jakarta" value="Asia/Jakarta">Asia/Jakarta</option><option title="UTC+07:00 - Asia/Krasnoyarsk" value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option><option title="UTC+07:00 - Asia/Novokuznetsk" value="Asia/Novokuznetsk">Asia/Novokuznetsk</option><option title="UTC+07:00 - Asia/Novosibirsk" value="Asia/Novosibirsk">Asia/Novosibirsk</option><option title="UTC+07:00 - Asia/Phnom Penh" value="Asia/Phnom_Penh">Asia/Phnom Penh</option><option title="UTC+07:00 - Asia/Pontianak" value="Asia/Pontianak">Asia/Pontianak</option><option title="UTC+07:00 - Asia/Tomsk" value="Asia/Tomsk">Asia/Tomsk</option><option title="UTC+07:00 - Asia/Vientiane" value="Asia/Vientiane">Asia/Vientiane</option><option title="UTC+07:00 - Indian/Christmas" value="Indian/Christmas">Indian/Christmas</option></optgroup><optgroup label="UTC+08:00 - 11 May 2021, 00:17"><option title="UTC+08:00 - Antarctica/Casey" value="Antarctica/Casey">Antarctica/Casey</option><option title="UTC+08:00 - Asia/Brunei" value="Asia/Brunei">Asia/Brunei</option><option title="UTC+08:00 - Asia/Choibalsan" value="Asia/Choibalsan">Asia/Choibalsan</option><option title="UTC+08:00 - Asia/Hong Kong" value="Asia/Hong_Kong">Asia/Hong Kong</option><option title="UTC+08:00 - Asia/Irkutsk" value="Asia/Irkutsk">Asia/Irkutsk</option><option title="UTC+08:00 - Asia/Kuala Lumpur" value="Asia/Kuala_Lumpur">Asia/Kuala Lumpur</option><option title="UTC+08:00 - Asia/Kuching" value="Asia/Kuching">Asia/Kuching</option><option title="UTC+08:00 - Asia/Macau" value="Asia/Macau">Asia/Macau</option><option title="UTC+08:00 - Asia/Makassar" value="Asia/Makassar">Asia/Makassar</option><option title="UTC+08:00 - Asia/Manila" value="Asia/Manila">Asia/Manila</option><option title="UTC+08:00 - Asia/Shanghai" value="Asia/Shanghai">Asia/Shanghai</option><option title="UTC+08:00 - Asia/Singapore" value="Asia/Singapore">Asia/Singapore</option><option title="UTC+08:00 - Asia/Taipei" value="Asia/Taipei">Asia/Taipei</option><option title="UTC+08:00 - Asia/Ulaanbaatar" value="Asia/Ulaanbaatar">Asia/Ulaanbaatar</option><option title="UTC+08:00 - Australia/Perth" value="Australia/Perth">Australia/Perth</option></optgroup><optgroup label="UTC+08:45 - 11 May 2021, 01:02"><option title="UTC+08:45 - Australia/Eucla" value="Australia/Eucla">Australia/Eucla</option></optgroup><optgroup label="UTC+09:00 - 11 May 2021, 01:17"><option title="UTC+09:00 - Asia/Chita" value="Asia/Chita">Asia/Chita</option><option title="UTC+09:00 - Asia/Dili" value="Asia/Dili">Asia/Dili</option><option title="UTC+09:00 - Asia/Jayapura" value="Asia/Jayapura">Asia/Jayapura</option><option title="UTC+09:00 - Asia/Khandyga" value="Asia/Khandyga">Asia/Khandyga</option><option title="UTC+09:00 - Asia/Pyongyang" value="Asia/Pyongyang">Asia/Pyongyang</option><option title="UTC+09:00 - Asia/Seoul" value="Asia/Seoul">Asia/Seoul</option><option title="UTC+09:00 - Asia/Tokyo" value="Asia/Tokyo">Asia/Tokyo</option><option title="UTC+09:00 - Asia/Yakutsk" value="Asia/Yakutsk">Asia/Yakutsk</option><option title="UTC+09:00 - Pacific/Palau" value="Pacific/Palau">Pacific/Palau</option></optgroup><optgroup label="UTC+09:30 - 11 May 2021, 01:47"><option title="UTC+09:30 - Australia/Adelaide" value="Australia/Adelaide">Australia/Adelaide</option><option title="UTC+09:30 - Australia/Broken Hill" value="Australia/Broken_Hill">Australia/Broken Hill</option><option title="UTC+09:30 - Australia/Darwin" value="Australia/Darwin">Australia/Darwin</option></optgroup><optgroup label="UTC+10:00 - 11 May 2021, 02:17"><option title="UTC+10:00 - Antarctica/DumontDUrville" value="Antarctica/DumontDUrville">Antarctica/DumontDUrville</option><option title="UTC+10:00 - Asia/Ust-Nera" value="Asia/Ust-Nera">Asia/Ust-Nera</option><option title="UTC+10:00 - Asia/Vladivostok" value="Asia/Vladivostok">Asia/Vladivostok</option><option title="UTC+10:00 - Australia/Brisbane" value="Australia/Brisbane">Australia/Brisbane</option><option title="UTC+10:00 - Australia/Currie" value="Australia/Currie">Australia/Currie</option><option title="UTC+10:00 - Australia/Hobart" value="Australia/Hobart">Australia/Hobart</option><option title="UTC+10:00 - Australia/Lindeman" value="Australia/Lindeman">Australia/Lindeman</option><option title="UTC+10:00 - Australia/Melbourne" value="Australia/Melbourne">Australia/Melbourne</option><option title="UTC+10:00 - Australia/Sydney" value="Australia/Sydney">Australia/Sydney</option><option title="UTC+10:00 - Pacific/Chuuk" value="Pacific/Chuuk">Pacific/Chuuk</option><option title="UTC+10:00 - Pacific/Guam" value="Pacific/Guam">Pacific/Guam</option><option title="UTC+10:00 - Pacific/Port Moresby" value="Pacific/Port_Moresby">Pacific/Port Moresby</option><option title="UTC+10:00 - Pacific/Saipan" value="Pacific/Saipan">Pacific/Saipan</option></optgroup><optgroup label="UTC+10:30 - 11 May 2021, 02:47"><option title="UTC+10:30 - Australia/Lord Howe" value="Australia/Lord_Howe">Australia/Lord Howe</option></optgroup><optgroup label="UTC+11:00 - 11 May 2021, 03:17"><option title="UTC+11:00 - Antarctica/Macquarie" value="Antarctica/Macquarie">Antarctica/Macquarie</option><option title="UTC+11:00 - Asia/Magadan" value="Asia/Magadan">Asia/Magadan</option><option title="UTC+11:00 - Asia/Sakhalin" value="Asia/Sakhalin">Asia/Sakhalin</option><option title="UTC+11:00 - Asia/Srednekolymsk" value="Asia/Srednekolymsk">Asia/Srednekolymsk</option><option title="UTC+11:00 - Pacific/Bougainville" value="Pacific/Bougainville">Pacific/Bougainville</option><option title="UTC+11:00 - Pacific/Efate" value="Pacific/Efate">Pacific/Efate</option><option title="UTC+11:00 - Pacific/Guadalcanal" value="Pacific/Guadalcanal">Pacific/Guadalcanal</option><option title="UTC+11:00 - Pacific/Kosrae" value="Pacific/Kosrae">Pacific/Kosrae</option><option title="UTC+11:00 - Pacific/Norfolk" value="Pacific/Norfolk">Pacific/Norfolk</option><option title="UTC+11:00 - Pacific/Noumea" value="Pacific/Noumea">Pacific/Noumea</option><option title="UTC+11:00 - Pacific/Pohnpei" value="Pacific/Pohnpei">Pacific/Pohnpei</option></optgroup><optgroup label="UTC+12:00 - 11 May 2021, 04:17"><option title="UTC+12:00 - Antarctica/McMurdo" value="Antarctica/McMurdo">Antarctica/McMurdo</option><option title="UTC+12:00 - Asia/Anadyr" value="Asia/Anadyr">Asia/Anadyr</option><option title="UTC+12:00 - Asia/Kamchatka" value="Asia/Kamchatka">Asia/Kamchatka</option><option title="UTC+12:00 - Pacific/Auckland" value="Pacific/Auckland">Pacific/Auckland</option><option title="UTC+12:00 - Pacific/Fiji" value="Pacific/Fiji">Pacific/Fiji</option><option title="UTC+12:00 - Pacific/Funafuti" value="Pacific/Funafuti">Pacific/Funafuti</option><option title="UTC+12:00 - Pacific/Kwajalein" value="Pacific/Kwajalein">Pacific/Kwajalein</option><option title="UTC+12:00 - Pacific/Majuro" value="Pacific/Majuro">Pacific/Majuro</option><option title="UTC+12:00 - Pacific/Nauru" value="Pacific/Nauru">Pacific/Nauru</option><option title="UTC+12:00 - Pacific/Tarawa" value="Pacific/Tarawa">Pacific/Tarawa</option><option title="UTC+12:00 - Pacific/Wake" value="Pacific/Wake">Pacific/Wake</option><option title="UTC+12:00 - Pacific/Wallis" value="Pacific/Wallis">Pacific/Wallis</option></optgroup><optgroup label="UTC+12:45 - 11 May 2021, 05:02"><option title="UTC+12:45 - Pacific/Chatham" value="Pacific/Chatham">Pacific/Chatham</option></optgroup><optgroup label="UTC+13:00 - 11 May 2021, 05:17"><option title="UTC+13:00 - Pacific/Apia" value="Pacific/Apia">Pacific/Apia</option><option title="UTC+13:00 - Pacific/Enderbury" value="Pacific/Enderbury">Pacific/Enderbury</option><option title="UTC+13:00 - Pacific/Fakaofo" value="Pacific/Fakaofo">Pacific/Fakaofo</option><option title="UTC+13:00 - Pacific/Tongatapu" value="Pacific/Tongatapu">Pacific/Tongatapu</option></optgroup><optgroup label="UTC+14:00 - 11 May 2021, 06:17"><option title="UTC+14:00 - Pacific/Kiritimati" value="Pacific/Kiritimati">Pacific/Kiritimati</option></optgroup>
							</select>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="other_config" class="col-md-5 col-form-label">Additional board config settings:<span class="form-text text-muted">Config settings entered here will be updated in the config table or added to the config table if they don’t exist yet. <u>Make sure to spell correctly.</u> This can also be edited when creating the boards.<br /><br />Type one config setting per line in a semicolon <kbd>;</kbd> separated list e.g., <kbd>config-name;config-setting;dynamic</kbd>. If the setting is not dynamic then the dynamic part is not needed. Lines starting with a <kbd>#</kbd> are considered comments and not added to the DB.<br /><br />Example:<br /><kbd>session_length;999999</kbd><br /><kbd>load_tplcompile;1;1</kbd><br /><kbd># A comment</kbd></span></label>
						<div class="col-md-7"><textarea class="form-control" name="qi_config[other_config]" id="other_config" rows="10">session_length;999999
#A comment...</textarea></div>
					</div>
				</fieldset>
			</div>
		</div>
	</section>

	<section id="email-settings" class="anchor">
		<div class="card bg-light mb-3">
			<div class="card-body">
				<fieldset>
					<legend>Board E-mail</legend>
					<div class="mb-3 row">
						<label for="board_email" class="col-md-5 col-form-label">Board email:<span class="form-text text-muted">The contact email address for your created boards. <span class="badge badge-secondary">Required</span></span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="board_email" name="qi_config[board_email]" value="qi_board@phpbb-quickinstall.tld"></div>
					</div>
					<div class="mb-3 row">
						<label class="col-md-5 col-form-label">Enable email:<span class="form-text text-muted">Enable board wide emails. For a local test board this would typically be off, unless you test the emails.</span></label>
						<div class="col-md-7">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[email_enable]" id="qi_config[email_enable]1" value="1">
								<label class="form-check-label" for="qi_config[email_enable]1">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[email_enable]" id="qi_config[email_enable]0" value="0" checked="checked">
								<label class="form-check-label" for="qi_config[email_enable]0">No</label>
							</div>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-md-5 col-form-label">Use SMTP server for e-mail:<span class="form-text text-muted">Enable this if you want or have to send e-mail via a named server instead of the local mail function.</span></label>
						<div class="col-md-7">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[smtp_delivery]" id="qi_config[smtp_delivery]1" value="1">
								<label class="form-check-label" for="qi_config[smtp_delivery]1">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[smtp_delivery]" id="qi_config[smtp_delivery]0" value="0" checked="checked">
								<label class="form-check-label" for="qi_config[smtp_delivery]0">No</label>
							</div>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="smtp_host" class="col-md-5 col-form-label">SMTP server address:<span class="form-text text-muted">The address of the SMTP server you want to use</span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="smtp_host" name="qi_config[smtp_host]" value=""></div>
					</div>
					<div class="mb-3 row">
						<label for="smtp_port" class="col-md-5 col-form-label">SMTP server port:<span class="form-text text-muted">Only change this if you know your SMTP server is on a different port.</span></label>
						<div class="col-md-7"><input class="form-control" type="text" maxlength="5" id="smtp_port" name="qi_config[smtp_port]" value="25"></div>
					</div>
					<div class="mb-3 row">
						<label for="smtp_auth" class="col-md-5 col-form-label">Authentication method for SMTP:<span class="form-text text-muted">Only used if an SMTP username and password is set.</span></label>
						<div class="col-md-7">
							<select name="qi_config[smtp_auth]" id="smtp_auth" class="custom-select">
								<option value="PLAIN" selected="selected">PLAIN</option>
								<option value="LOGIN">LOGIN</option>
								<option value="CRAM-MD5">CRAM-MD5</option>
								<option value="DIGEST-MD5">DIGEST-MD5</option>
								<option value="POP-BEFORE-SMTP">POP-BEFORE-SMTP</option>
							</select>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="smtp_user" class="col-md-5 col-form-label">SMTP username:<span class="form-text text-muted">Only enter a username if your SMTP server requires it.</span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="smtp_user" name="qi_config[smtp_user]" value=""></div>
					</div>
					<div class="mb-3 row">
						<label for="smtp_pass" class="col-md-5 col-form-label">SMTP password:<span class="form-text text-muted">Only enter a password if your SMTP server requires it.</span></label>
						<div class="col-md-7"><input class="form-control" type="password" id="smtp_pass" name="qi_config[smtp_pass]" value=""></div>
					</div>
				</fieldset>
			</div>
		</div>
	</section>

	<section id="populate-settings" class="anchor">
		<div class="card bg-light mb-3">
			<div class="card-body">
				<fieldset>
					<legend>Populate options</legend>
					<div class="alert alert-info">
						<div class="row">
							<div class="col-auto align-self-start pr-2">
								<svg class="bi icon text-info" width="24" height="24" fill="currentColor">
									<use xlink:href="style/assets/img/bootstrap-icons.svg#info-square-fill"/>
								</svg>️
							</div>
							<div class="col pl-2">
								These settings can be changed when you create a board.
							</div>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-md-5 col-form-label">Populate board:<span class="form-text text-muted">Populates the board with the number of users, forums, posts and topics you specify below. Note that the more users, forums, posts and topics you specify, the longer it will take to process.</span></label>
						<div class="col-md-7">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[populate]" id="qi_config[populate]1" value="1">
								<label class="form-check-label" for="qi_config[populate]1">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[populate]" id="qi_config[populate]0" value="0" checked="checked">
								<label class="form-check-label" for="qi_config[populate]0">No</label>
							</div>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="num_users" class="col-md-5 col-form-label">Number of users:<span class="form-text text-muted">The number of users to populate your new board with. They will be assigned the username <code>tester_x</code> (x is from 1 to number of users) and they will all use the password <code>123456</code>.</span></label>
						<div class="col-md-7"><input class="form-control" type="number" min="0" max="99999" id="num_users" name="qi_config[num_users]" value="100"></div>
					</div>
					<div class="mb-3 row">
						<label for="num_new_group" class="col-md-5 col-form-label">Newly registered users:<span class="form-text text-muted">The number of users to place in the newly registered group. If this number is larger than the number of users, all new users will be placed in the newly registered group.</span></label>
						<div class="col-md-7"><input class="form-control" type="number" min="0" max="99999" id="num_new_group" name="qi_config[num_new_group]" value="10"></div>
					</div>
					<div class="mb-3 row">
						<label for="email_domain" class="col-md-5 col-form-label">Email domain:<span class="form-text text-muted">The email domain to use for the populated users. Their email will be <code>tester_x@&lt;domain.com&gt;</code>. <span class="badge badge-secondary">Required</span></span></label>
						<div class="col-md-7">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">@</span>
								</div>
								<input class="form-control" type="text" id="email_domain" name="qi_config[email_domain]" value="phpbb-quickinstall.tld">
							</div>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-md-5 col-form-label">Create admin:<span class="form-text text-muted">Create one admin. This will not be the founder. This will be <code>tester_1</code>.</span></label>
						<div class="col-md-7">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[create_admin]" id="qi_config[create_admin]1" value="1" checked="checked">
								<label class="form-check-label" for="qi_config[create_admin]1">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[create_admin]" id="qi_config[create_admin]0" value="0">
								<label class="form-check-label" for="qi_config[create_admin]0">No</label>
							</div>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-md-5 col-form-label">Create moderator:<span class="form-text text-muted">Create one global moderator. This will be <code>tester_1</code> (or <code>tester_2</code> if create admin is enabled).</span></label>
						<div class="col-md-7">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[create_mod]" id="qi_config[create_mod]1" value="1" checked="checked">
								<label class="form-check-label" for="qi_config[create_mod]1">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[create_mod]" id="qi_config[create_mod]0" value="0">
								<label class="form-check-label" for="qi_config[create_mod]0">No</label>
							</div>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="num_cats" class="col-md-5 col-form-label">Number of categories:<span class="form-text text-muted">The number of forum categories to create.</span></label>
						<div class="col-md-7"><input class="form-control" type="number" min="0" max="99999" id="num_cats" name="qi_config[num_cats]" value="2"></div>
					</div>
					<div class="mb-3 row">
						<label for="num_forums" class="col-md-5 col-form-label">Number of forums:<span class="form-text text-muted">The number of forums to create, they will be spread evenly over the created categories.</span></label>
						<div class="col-md-7"><input class="form-control" type="number" min="0" max="99999" id="num_forums" name="qi_config[num_forums]" value="10"></div>
					</div>
					<div class="mb-3 row">
						<label for="num_topics" class="col-md-5 col-form-label">Number of topics:<span class="form-text text-muted">The number of topics to create in each forum. Each forum will get a random number of topics between these min and max values.</span></label>
						<div class="col-md-7">
							<label>Min <input class="form-control" type="number" min="0" max="99999" id="num_topics" name="qi_config[num_topics_min]" value="5"></label>
							<label>Max <input class="form-control" type="number" min="0" max="99999" name="qi_config[num_topics_max]" value="25"></label>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="num_replies" class="col-md-5 col-form-label">Number of replies:<span class="form-text text-muted">The number of replies. Each topic will receive a random number of replies between these min and max values.</span></label>
						<div class="col-md-7">
							<label>Min <input class="form-control" type="number" min="0" max="99999" id="num_replies" name="qi_config[num_replies_min]" value="0"></label>
							<label>Max <input class="form-control" type="number" min="0" max="99999" name="qi_config[num_replies_max]" value="50"></label>
						</div>
					</div>
					<div class="alert alert-info">
						<h5 class="card-title">
							<svg class="bi icon text-info" width="24" height="24" fill="currentColor">
								<use xlink:href="style/assets/img/bootstrap-icons.svg#info-square-fill"/>
							</svg> Chunk settings
						</h5>
						<p class="card-text">QuickInstall tries to reduce the number of queries generated from creating posts, topics and users by using chunks. The chunk size affects the time it takes to populate a board. There is no general setting that is perfect for everybody. If you do a lot of populating with QuickInstall you might want to experiment with these settings. Larger chunks may use too much memory while smaller chunks will query the DB more often. We have found the default settings to be the best compromise.</p>
					</div>
					<div class="mb-3 row">
						<label for="chunk_post" class="col-md-5 col-form-label">Post chunk:<span class="form-text text-muted">The number of posts that will be sent to the database in each query. Default: 1000.</span></label>
						<div class="col-md-7"><input class="form-control" type="number" min="0" max="999999" id="chunk_post" name="qi_config[chunk_post]" value="1000"></div>
					</div>
					<div class="mb-3 row">
						<label for="chunk_topic" class="col-md-5 col-form-label">Topic chunk:<span class="form-text text-muted">The number of topics that will be sent to the database in each query. Default: 2000.</span></label>
						<div class="col-md-7"><input class="form-control" type="number" min="0" max="999999" id="chunk_topic" name="qi_config[chunk_topic]" value="2000"></div>
					</div>
					<div class="mb-3 row">
						<label for="chunk_user" class="col-md-5 col-form-label">User chunk:<span class="form-text text-muted">The number of users that will be sent to the database in each query. Default: 5000.</span></label>
						<div class="col-md-7"><input class="form-control" type="number" min="0" max="999999" id="chunk_user" name="qi_config[chunk_user]" value="5000"></div>
					</div>
				</fieldset>
			</div>
		</div>
	</section>

	<section id="misc-settings" class="anchor">
		<div class="card bg-light mb-3">
			<div class="card-body">
				<fieldset>
					<legend>Install options</legend>
					<div class="alert alert-info">
						<div class="row">
							<div class="col-auto align-self-start pr-2">
								<svg class="bi icon text-info" width="24" height="24" fill="currentColor">
									<use xlink:href="style/assets/img/bootstrap-icons.svg#info-square-fill"/>
								</svg>️
							</div>
							<div class="col pl-2">
								These settings can be changed when you create a board.
							</div>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="alt_env" class="col-md-5 col-form-label">Alternate environment:<span class="form-text text-muted">Alternate phpBB environments are available if you have added additional phpBB3 boards to the <code>sources/phpBB3_alt/</code> directory.</span></label>
						<div class="col-md-7">
							<select name="qi_config[alt_env]" id="alt_env" class="custom-select">
																	<option value="" selected="selected">Default environment (latest phpBB)</option>
															</select>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-md-5 col-form-label">Redirect to new board:<span class="form-text text-muted">Redirect to new board after it is created.</span></label>
						<div class="col-md-7">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[redirect]" id="qi_config[redirect]1" value="1" checked="checked">
								<label class="form-check-label" for="qi_config[redirect]1">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[redirect]" id="qi_config[redirect]0" value="0">
								<label class="form-check-label" for="qi_config[redirect]0">No</label>
							</div>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-md-5 col-form-label">Install additional styles:<span class="form-text text-muted">Install all styles found in <code>[source]/styles</code>. Styles missing their required parent style will be ignored.</span></label>
						<div class="col-md-7">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[install_styles]" id="qi_config[install_styles]1" value="1">
								<label class="form-check-label" for="qi_config[install_styles]1">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[install_styles]" id="qi_config[install_styles]0" value="0" checked="checked">
								<label class="form-check-label" for="qi_config[install_styles]0">No</label>
							</div>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="default_style" class="col-md-5 col-form-label">Set default style:<span class="form-text text-muted">Enter the name of the style you want to use as the default style. The name can be found in the <code>styles/[style name]/style.cfg</code> file. Defaults to prosilver if empty or the style can’t be installed.</span></label>
						<div class="col-md-7"><input class="form-control" type="text" id="default_style" name="qi_config[default_style]" value=""></div>
					</div>
					<div class="mb-3 row">
						<label class="col-md-5 col-form-label">Drop database if it exists:<span class="form-text text-muted">Have &quot;Drop database if it exists&quot; checked by default when creating boards.</span></label>
						<div class="col-md-7">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[drop_db]" id="qi_config[drop_db]1" value="1">
								<label class="form-check-label" for="qi_config[drop_db]1">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[drop_db]" id="qi_config[drop_db]0" value="0" checked="checked">
								<label class="form-check-label" for="qi_config[drop_db]0">No</label>
							</div>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-md-5 col-form-label">Delete files if they exist:<span class="form-text text-muted">Have &quot;Delete files if they exist&quot; checked by default when creating boards.</span></label>
						<div class="col-md-7">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[delete_files]" id="qi_config[delete_files]1" value="1">
								<label class="form-check-label" for="qi_config[delete_files]1">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[delete_files]" id="qi_config[delete_files]0" value="0" checked="checked">
								<label class="form-check-label" for="qi_config[delete_files]0">No</label>
							</div>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-md-5 col-form-label">Enable Debug:<span class="form-text text-muted">Display load time, memory usage, query stats and enhanced error reporting.</span></label>
						<div class="col-md-7">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[debug]" id="qi_config[debug]1" value="1">
								<label class="form-check-label" for="qi_config[debug]1">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="qi_config[debug]" id="qi_config[debug]0" value="0" checked="checked">
								<label class="form-check-label" for="qi_config[debug]0">No</label>
							</div>
						</div>
					</div>
				</fieldset>
			</div>
		</div>
	</section>

	<section id="save-settings" class="anchor">
		<div class="card bg-light mb-3">
			<div class="card-body">
				<fieldset>
					<legend>Save profile</legend>
					<div class="mb-3 row">
						<label for="save_profile" class="col-md-5 col-form-label">Save as new profile:<span class="form-text text-muted">Enter a name to create a new profile with these settings, or leave this field blank to update the current profile. If a profile of the same name already exists, it will be overwritten.<br /><br />Allowed characters: <kbd>A-Z a-z 0-9 - _ .</kbd></span></label>
						<input type="hidden" name="sel_lang" value="en">
						<input type="hidden" name="used_profile" value="">
						<div class="col-md-6">
							<div class="input-group">
								<input class="form-control" type="text" id="save_profile" name="save_profile" value="default" aria-describedby="button-addon">
								<div class="input-group-append" id="button-addon">
									<button type="submit" name="submit" value="Save" class="btn btn-primary">Save</button>
									<button type="reset" name="reset" value="Reset" class="btn btn-secondary">Reset</button>
								</div>
							</div>
						</div>
					</div>
				</fieldset>
			</div>
		</div>
	</section>

</form>

			</div>
		</div>
	</div>

	<footer class="text-center py-3">
		<p class="mb-0"><a href="https://www.phpbb.com/customise/db/official_tool/phpbb3_quickinstall/">phpBB<small><sup>&reg;</sup></small> QuickInstall</a> 1.5.0 for phpBB 3.0 - 4.0</p>
		<p class="mb-0">Powered by phpBB<sup>&reg;</sup> Forum Software &copy; <a href="https://www.phpbb.com/">phpBB Limited</a></p>
			</footer>
</div>

<script src="style/assets/js/jquery.min.js"></script>
<script src="style/assets/js/bootstrap.min.js"></script>
<script src="style/assets/js/scripts.js?v=1.5.0"></script>

</body>
</html>
