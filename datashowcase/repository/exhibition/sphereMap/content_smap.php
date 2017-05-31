<style type="text/css">
		.axis path,
		.axis line{
			fill: none;
			stroke: black;
			shape-rendering: crispEdges;
		}
		.axis text{
			font-family: sans-serif;
			font-size: 11px;
		}
		.route {
			stroke: black;
			stroke-width: 3px;
			fill: none;
		}
		.overlay {
			fill: none;
			pointer-events: all;
		}
		.province {
			stroke: black;
			stroke-width: 1px;
		}
		.valueText {
			font-family: arial;
			font-size: 12px;
			text-anchor: middle;
		}
		.tooltip {
			position: absolute;
			width: 120;
			height: auto;
			font-family: simsun;
			font-size: 14px;
			text-align: center;
			color: white;
			border-width: 2px solid black;
			background-color: black;
			border-radius: 5px;
		}
		.tooltip:after {
			content: '';
			position: absolute;
			bottom: 100%;
			left: 20%;
			margin-left: -8px;
			width: 0;
			height: 0;
			border-bottom: 12px solid #000000;
			border-right: 12px solid transparent;
			border-left: 12px solid transparent;
		}
		.tooltip .title {
			border-bottom: 1px solid #000;
			text-align: center;
		}
		.tooltip .desColor {
			width: 10px;
			height: 10px;
			float: left;
			margin: 9px 8px 1px 8px;
		}
</style>
<h1>Exhibition</h1>
<p>Just in case you are going to sleep</p>
<p>So I made this 'ball' to make geo data visualized</p>
<script src="repository/exhibition/sphereMap/smap.js" charset="urf-8"></script>