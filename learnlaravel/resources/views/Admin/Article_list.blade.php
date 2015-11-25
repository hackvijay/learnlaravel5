@extends('Admin.header')
<div class="span6">
		<!-- BEGIN SAMPLE TABLE PORTLET-->
	<div class="portlet">

		<div class="portlet-title">

			<div class="caption"><i class="icon-bell"></i>Advance Table</div>

			<div class="tools">

				<a class="collapse" href="javascript:;"></a>

				<a class="config" data-toggle="modal" href="#portlet-config"></a>

				<a class="reload" href="javascript:;"></a>

				<a class="remove" href="javascript:;"></a>

			</div>

		</div>

		<div class="portlet-body">

			<table class="table table-striped table-bordered table-advance table-hover">

				<thead>

					<tr>

						<th><i class="icon-briefcase"></i> Company</th>

						<th class="hidden-phone"><i class="icon-user"></i> Contact</th>

						<th><i class="icon-shopping-cart"></i> Total</th>

						<th></th>

					</tr>

				</thead>

				<tbody>

					<tr>

						<td class="highlight">

							<div class="success"></div>

							<a href="#">RedBull</a>

						</td>

						<td class="hidden-phone">Mike Nilson</td>

						<td>2560.60$</td>

						<td><a class="btn mini purple" href="#"><i class="icon-edit"></i> Edit</a></td>

					</tr>

					<tr>

						<td class="highlight">

							<div class="info"></div>

							<a href="#">Google</a>

						</td>

						<td class="hidden-phone">Adam Larson</td>

						<td>560.60$</td>

						<td><a class="btn mini black" href="#"><i class="icon-trash"></i> Delete</a></td>

					</tr>

					<tr>

						<td class="highlight">

							<div class="important"></div>

							<a href="#">Apple</a>

						</td>

						<td class="hidden-phone">Daniel Kim</td>

						<td>3460.60$</td>

						<td><a class="btn mini purple" href="#"><i class="icon-edit"></i> Edit</a></td>

					</tr>

					<tr>

						<td class="highlight">

							<div class="warning"></div>

							<a href="#">Microsoft</a>

						</td>

						<td class="hidden-phone">Nick </td>

						<td>2560.60$</td>

						<td><a class="btn mini blue" href="#"><i class="icon-share"></i> Share</a></td>

					</tr>

				</tbody>

			</table>

		</div>

	</div>
<!-- END SAMPLE TABLE PORTLET-->
</div>