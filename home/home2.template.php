<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" ng-controller="home2Controller">
	<div class="row" id="top">
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-cogs" aria-hidden="true"></i> &nbsp;
				Plugins Lister ({{brews.length}} plugins available)
			</li>
		</ol>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4">
			<input style="display:inline-block;vertical-align:middle;" type="text" ng-model="field" class="form-control" placeholder="Search..." required="true" />
		</div>
	</div>
	<br>
	<div class="row" id="hb-list">
		<div ng-repeat="brew in brews | filter: filterBrews(field)" class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
			<div class="panel panel-widget ">
				<div class="row no-padding">
					<div class="col-md-12">
						<h4 style="white-space: nowrap;overflow: hidden;"><a href="#/info/{{brew.id}}"><b>{{brew.name}} {{brew.version}}</b></a></h3>
						<h6>{{brew.author}}</h6>
						<h5 style="white-space: nowrap;overflow: hidden;">{{brew.description}}</h5>
						<a href="{{brew.url}}"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Download</a>
						&nbsp;
						<a href="#/info/{{brew.id}}"><i class="fa fa-info" aria-hidden="true"></i> Show info</a>
						&nbsp;
						<a ng-if="user" href="#/edit/{{brew.id}}"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
					</div>
					<div class="topcorner"><h6 style="text-align: right;">{{brew.date}} &nbsp;<br>{{brew.downloads}} DLs&nbsp;</h6></div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="row" id="botbar">
		<h1><a id="go-top" href="" ng-click="goTop()"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></a></h1>
	</div>
</div>