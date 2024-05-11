<html lang="en">

<head>
    <title>Admin</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->


    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">



    <style type="text/css">
    .apexcharts-canvas {
        position: relative;
        user-select: none;
        /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
    }

    /* scrollbar is not visible by default for legend, hence forcing the visibility */
    .apexcharts-canvas ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 6px;
    }

    .apexcharts-canvas ::-webkit-scrollbar-thumb {
        border-radius: 4px;
        background-color: rgba(0, 0, 0, .5);
        box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
    }

    .apexcharts-canvas.apexcharts-theme-dark {
        background: #343F57;
    }

    .apexcharts-inner {
        position: relative;
    }

    .apexcharts-text tspan {
        font-family: inherit;
    }

    .legend-mouseover-inactive {
        transition: 0.15s ease all;
        opacity: 0.20;
    }

    .apexcharts-series-collapsed {
        opacity: 0;
    }

    .apexcharts-gridline,
    .apexcharts-annotation-rect {
        pointer-events: none;
    }

    .apexcharts-tooltip {
        border-radius: 5px;
        box-shadow: 2px 2px 6px -4px #999;
        cursor: default;
        font-size: 14px;
        left: 62px;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        top: 20px;
        overflow: hidden;
        white-space: nowrap;
        z-index: 12;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-theme-light {
        border: 1px solid #e3e3e3;
        background: rgba(255, 255, 255, 0.96);
    }

    .apexcharts-tooltip.apexcharts-theme-dark {
        color: #fff;
        background: rgba(30, 30, 30, 0.8);
    }

    .apexcharts-tooltip * {
        font-family: inherit;
    }

    .apexcharts-tooltip .apexcharts-marker,
    .apexcharts-area-series .apexcharts-area,
    .apexcharts-line {
        pointer-events: none;
    }

    .apexcharts-tooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip-title {
        padding: 6px;
        font-size: 15px;
        margin-bottom: 4px;
    }

    .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
        background: #ECEFF1;
        border-bottom: 1px solid #ddd;
    }

    .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
        background: rgba(0, 0, 0, 0.7);
        border-bottom: 1px solid #333;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        display: inline-block;
        font-weight: 600;
        margin-left: 5px;
    }

    .apexcharts-tooltip-text-z-label:empty,
    .apexcharts-tooltip-text-z-value:empty {
        display: none;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        font-weight: 600;
    }

    .apexcharts-tooltip-marker {
        width: 12px;
        height: 12px;
        position: relative;
        top: 0px;
        margin-right: 10px;
        border-radius: 50%;
    }

    .apexcharts-tooltip-series-group {
        padding: 0 10px;
        display: none;
        text-align: left;
        justify-content: left;
        align-items: center;
    }

    .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
        opacity: 1;
    }

    .apexcharts-tooltip-series-group.apexcharts-active,
    .apexcharts-tooltip-series-group:last-child {
        padding-bottom: 4px;
    }

    .apexcharts-tooltip-series-group-hidden {
        opacity: 0;
        height: 0;
        line-height: 0;
        padding: 0 !important;
    }

    .apexcharts-tooltip-y-group {
        padding: 6px 0 5px;
    }

    .apexcharts-tooltip-candlestick {
        padding: 4px 8px;
    }

    .apexcharts-tooltip-candlestick>div {
        margin: 4px 0;
    }

    .apexcharts-tooltip-candlestick span.value {
        font-weight: bold;
    }

    .apexcharts-tooltip-rangebar {
        padding: 5px 8px;
    }

    .apexcharts-tooltip-rangebar .category {
        font-weight: 600;
        color: #777;
    }

    .apexcharts-tooltip-rangebar .series-name {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .apexcharts-xaxistooltip {
        opacity: 0;
        padding: 9px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
        transition: 0.15s ease all;
    }

    .apexcharts-xaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-xaxistooltip:after,
    .apexcharts-xaxistooltip:before {
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-xaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-left: -6px;
    }

    .apexcharts-xaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-left: -7px;
    }

    .apexcharts-xaxistooltip-bottom:after,
    .apexcharts-xaxistooltip-bottom:before {
        bottom: 100%;
    }

    .apexcharts-xaxistooltip-top:after,
    .apexcharts-xaxistooltip-top:before {
        top: 100%;
    }

    .apexcharts-xaxistooltip-bottom:after {
        border-bottom-color: #ECEFF1;
    }

    .apexcharts-xaxistooltip-bottom:before {
        border-bottom-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top:after {
        border-top-color: #ECEFF1
    }

    .apexcharts-xaxistooltip-top:before {
        border-top-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
        border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
        border-top-color: rgba(0, 0, 0, 0.5);
    }


    .apexcharts-xaxistooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-yaxistooltip {
        opacity: 0;
        padding: 4px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
    }

    .apexcharts-yaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-yaxistooltip:after,
    .apexcharts-yaxistooltip:before {
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-yaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-top: -6px;
    }

    .apexcharts-yaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-top: -7px;
    }

    .apexcharts-yaxistooltip-left:after,
    .apexcharts-yaxistooltip-left:before {
        left: 100%;
    }

    .apexcharts-yaxistooltip-right:after,
    .apexcharts-yaxistooltip-right:before {
        right: 100%;
    }

    .apexcharts-yaxistooltip-left:after {
        border-left-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-left:before {
        border-left-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right:after {
        border-right-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-right:before {
        border-right-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip.apexcharts-active {
        opacity: 1;
    }

    .apexcharts-yaxistooltip-hidden {
        display: none;
    }

    .apexcharts-xcrosshairs,
    .apexcharts-ycrosshairs {
        pointer-events: none;
        opacity: 0;
        transition: 0.15s ease all;
    }

    .apexcharts-xcrosshairs.apexcharts-active,
    .apexcharts-ycrosshairs.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-ycrosshairs-hidden {
        opacity: 0;
    }

    .apexcharts-zoom-rect {
        pointer-events: none;
    }

    .apexcharts-selection-rect {
        cursor: move;
    }

    .svg_select_points,
    .svg_select_points_rot {
        opacity: 0;
        visibility: hidden;
    }

    .svg_select_points_l,
    .svg_select_points_r {
        cursor: ew-resize;
        opacity: 1;
        visibility: visible;
        fill: #888;
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
        cursor: crosshair
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-pan {
        cursor: move
    }


    .apexcharts-zoom-icon,
    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon,
    .apexcharts-reset-icon,
    .apexcharts-pan-icon,
    .apexcharts-selection-icon,
    .apexcharts-menu-icon,
    .apexcharts-toolbar-custom-icon {
        cursor: pointer;
        width: 20px;
        height: 20px;
        line-height: 24px;
        color: #6E8192;
        text-align: center;
    }


    .apexcharts-zoom-icon svg,
    .apexcharts-zoomin-icon svg,
    .apexcharts-zoomout-icon svg,
    .apexcharts-reset-icon svg,
    .apexcharts-menu-icon svg {
        fill: #6E8192;
    }

    .apexcharts-selection-icon svg {
        fill: #444;
        transform: scale(0.76)
    }

    .apexcharts-theme-dark .apexcharts-zoom-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
    .apexcharts-theme-dark .apexcharts-reset-icon svg,
    .apexcharts-theme-dark .apexcharts-pan-icon svg,
    .apexcharts-theme-dark .apexcharts-selection-icon svg,
    .apexcharts-theme-dark .apexcharts-menu-icon svg,
    .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
        fill: #f3f4f5;
    }

    .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
        fill: #008FFB;
    }

    .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
    .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
    .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
    .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
        fill: #333;
    }

    .apexcharts-selection-icon,
    .apexcharts-menu-icon {
        position: relative;
    }

    .apexcharts-reset-icon {
        margin-left: 5px;
    }

    .apexcharts-zoom-icon,
    .apexcharts-reset-icon,
    .apexcharts-menu-icon {
        transform: scale(0.85);
    }

    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon {
        transform: scale(0.7)
    }

    .apexcharts-zoomout-icon {
        margin-right: 3px;
    }

    .apexcharts-pan-icon {
        transform: scale(0.62);
        position: relative;
        left: 1px;
        top: 0px;
    }

    .apexcharts-pan-icon svg {
        fill: #fff;
        stroke: #6E8192;
        stroke-width: 2;
    }

    .apexcharts-pan-icon.apexcharts-selected svg {
        stroke: #008FFB;
    }

    .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
        stroke: #333;
    }

    .apexcharts-toolbar {
        position: absolute;
        z-index: 11;
        top: 0px;
        right: 3px;
        max-width: 176px;
        text-align: right;
        border-radius: 3px;
        padding: 0px 6px 2px 6px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .apexcharts-toolbar svg {
        pointer-events: none;
    }

    .apexcharts-menu {
        background: #fff;
        position: absolute;
        top: 100%;
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 3px;
        right: 10px;
        opacity: 0;
        min-width: 110px;
        transition: 0.15s ease all;
        pointer-events: none;
    }

    .apexcharts-menu.apexcharts-menu-open {
        opacity: 1;
        pointer-events: all;
        transition: 0.15s ease all;
    }

    .apexcharts-menu-item {
        padding: 6px 7px;
        font-size: 12px;
        cursor: pointer;
    }

    .apexcharts-theme-light .apexcharts-menu-item:hover {
        background: #eee;
    }

    .apexcharts-theme-dark .apexcharts-menu {
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
    }

    @media screen and (min-width: 768px) {

        .apexcharts-canvas:hover .apexcharts-toolbar {
            opacity: 1;
        }
    }

    .apexcharts-datalabel.apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-pie-label,
    .apexcharts-datalabels,
    .apexcharts-datalabel,
    .apexcharts-datalabel-label,
    .apexcharts-datalabel-value {
        cursor: default;
        pointer-events: none;
    }

    .apexcharts-pie-label-delay {
        opacity: 0;
        animation-name: opaque;
        animation-duration: 0.3s;
        animation-fill-mode: forwards;
        animation-timing-function: ease;
    }

    .apexcharts-canvas .apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-hide .apexcharts-series-points {
        opacity: 0;
    }

    .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-radar-series path,
    .apexcharts-radar-series polygon {
        pointer-events: none;
    }

    /* markers */

    .apexcharts-marker {
        transition: 0.15s ease all;
    }

    @keyframes opaque {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    /* Resize generated styles */
    @keyframes resizeanim {
        from {
            opacity: 0;
        }

        to {
            opacity: 0;
        }
    }

    .resize-triggers {
        animation: 1ms resizeanim;
        visibility: hidden;
        opacity: 0;
    }

    .resize-triggers,
    .resize-triggers>div,
    .contract-trigger:before {
        content: " ";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        overflow: hidden;
    }

    .resize-triggers>div {
        background: #eee;
        overflow: auto;
    }

    .contract-trigger:before {
        width: 200%;
        height: 200%;
    }
    </style>
    <style type="text/css">
    .apexcharts-canvas {
        position: relative;
        user-select: none;
        /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
    }

    /* scrollbar is not visible by default for legend, hence forcing the visibility */
    .apexcharts-canvas ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 6px;
    }

    .apexcharts-canvas ::-webkit-scrollbar-thumb {
        border-radius: 4px;
        background-color: rgba(0, 0, 0, .5);
        box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
    }

    .apexcharts-canvas.apexcharts-theme-dark {
        background: #343F57;
    }

    .apexcharts-inner {
        position: relative;
    }

    .apexcharts-text tspan {
        font-family: inherit;
    }

    .legend-mouseover-inactive {
        transition: 0.15s ease all;
        opacity: 0.20;
    }

    .apexcharts-series-collapsed {
        opacity: 0;
    }

    .apexcharts-gridline,
    .apexcharts-annotation-rect {
        pointer-events: none;
    }

    .apexcharts-tooltip {
        border-radius: 5px;
        box-shadow: 2px 2px 6px -4px #999;
        cursor: default;
        font-size: 14px;
        left: 62px;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        top: 20px;
        overflow: hidden;
        white-space: nowrap;
        z-index: 12;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-theme-light {
        border: 1px solid #e3e3e3;
        background: rgba(255, 255, 255, 0.96);
    }

    .apexcharts-tooltip.apexcharts-theme-dark {
        color: #fff;
        background: rgba(30, 30, 30, 0.8);
    }

    .apexcharts-tooltip * {
        font-family: inherit;
    }

    .apexcharts-tooltip .apexcharts-marker,
    .apexcharts-area-series .apexcharts-area,
    .apexcharts-line {
        pointer-events: none;
    }

    .apexcharts-tooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip-title {
        padding: 6px;
        font-size: 15px;
        margin-bottom: 4px;
    }

    .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
        background: #ECEFF1;
        border-bottom: 1px solid #ddd;
    }

    .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
        background: rgba(0, 0, 0, 0.7);
        border-bottom: 1px solid #333;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        display: inline-block;
        font-weight: 600;
        margin-left: 5px;
    }

    .apexcharts-tooltip-text-z-label:empty,
    .apexcharts-tooltip-text-z-value:empty {
        display: none;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        font-weight: 600;
    }

    .apexcharts-tooltip-marker {
        width: 12px;
        height: 12px;
        position: relative;
        top: 0px;
        margin-right: 10px;
        border-radius: 50%;
    }

    .apexcharts-tooltip-series-group {
        padding: 0 10px;
        display: none;
        text-align: left;
        justify-content: left;
        align-items: center;
    }

    .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
        opacity: 1;
    }

    .apexcharts-tooltip-series-group.apexcharts-active,
    .apexcharts-tooltip-series-group:last-child {
        padding-bottom: 4px;
    }

    .apexcharts-tooltip-series-group-hidden {
        opacity: 0;
        height: 0;
        line-height: 0;
        padding: 0 !important;
    }

    .apexcharts-tooltip-y-group {
        padding: 6px 0 5px;
    }

    .apexcharts-tooltip-candlestick {
        padding: 4px 8px;
    }

    .apexcharts-tooltip-candlestick>div {
        margin: 4px 0;
    }

    .apexcharts-tooltip-candlestick span.value {
        font-weight: bold;
    }

    .apexcharts-tooltip-rangebar {
        padding: 5px 8px;
    }

    .apexcharts-tooltip-rangebar .category {
        font-weight: 600;
        color: #777;
    }

    .apexcharts-tooltip-rangebar .series-name {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .apexcharts-xaxistooltip {
        opacity: 0;
        padding: 9px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
        transition: 0.15s ease all;
    }

    .apexcharts-xaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-xaxistooltip:after,
    .apexcharts-xaxistooltip:before {
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-xaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-left: -6px;
    }

    .apexcharts-xaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-left: -7px;
    }

    .apexcharts-xaxistooltip-bottom:after,
    .apexcharts-xaxistooltip-bottom:before {
        bottom: 100%;
    }

    .apexcharts-xaxistooltip-top:after,
    .apexcharts-xaxistooltip-top:before {
        top: 100%;
    }

    .apexcharts-xaxistooltip-bottom:after {
        border-bottom-color: #ECEFF1;
    }

    .apexcharts-xaxistooltip-bottom:before {
        border-bottom-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top:after {
        border-top-color: #ECEFF1
    }

    .apexcharts-xaxistooltip-top:before {
        border-top-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
        border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
        border-top-color: rgba(0, 0, 0, 0.5);
    }


    .apexcharts-xaxistooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-yaxistooltip {
        opacity: 0;
        padding: 4px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
    }

    .apexcharts-yaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-yaxistooltip:after,
    .apexcharts-yaxistooltip:before {
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-yaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-top: -6px;
    }

    .apexcharts-yaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-top: -7px;
    }

    .apexcharts-yaxistooltip-left:after,
    .apexcharts-yaxistooltip-left:before {
        left: 100%;
    }

    .apexcharts-yaxistooltip-right:after,
    .apexcharts-yaxistooltip-right:before {
        right: 100%;
    }

    .apexcharts-yaxistooltip-left:after {
        border-left-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-left:before {
        border-left-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right:after {
        border-right-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-right:before {
        border-right-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip.apexcharts-active {
        opacity: 1;
    }

    .apexcharts-yaxistooltip-hidden {
        display: none;
    }

    .apexcharts-xcrosshairs,
    .apexcharts-ycrosshairs {
        pointer-events: none;
        opacity: 0;
        transition: 0.15s ease all;
    }

    .apexcharts-xcrosshairs.apexcharts-active,
    .apexcharts-ycrosshairs.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-ycrosshairs-hidden {
        opacity: 0;
    }

    .apexcharts-zoom-rect {
        pointer-events: none;
    }

    .apexcharts-selection-rect {
        cursor: move;
    }

    .svg_select_points,
    .svg_select_points_rot {
        opacity: 0;
        visibility: hidden;
    }

    .svg_select_points_l,
    .svg_select_points_r {
        cursor: ew-resize;
        opacity: 1;
        visibility: visible;
        fill: #888;
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
        cursor: crosshair
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-pan {
        cursor: move
    }


    .apexcharts-zoom-icon,
    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon,
    .apexcharts-reset-icon,
    .apexcharts-pan-icon,
    .apexcharts-selection-icon,
    .apexcharts-menu-icon,
    .apexcharts-toolbar-custom-icon {
        cursor: pointer;
        width: 20px;
        height: 20px;
        line-height: 24px;
        color: #6E8192;
        text-align: center;
    }


    .apexcharts-zoom-icon svg,
    .apexcharts-zoomin-icon svg,
    .apexcharts-zoomout-icon svg,
    .apexcharts-reset-icon svg,
    .apexcharts-menu-icon svg {
        fill: #6E8192;
    }

    .apexcharts-selection-icon svg {
        fill: #444;
        transform: scale(0.76)
    }

    .apexcharts-theme-dark .apexcharts-zoom-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
    .apexcharts-theme-dark .apexcharts-reset-icon svg,
    .apexcharts-theme-dark .apexcharts-pan-icon svg,
    .apexcharts-theme-dark .apexcharts-selection-icon svg,
    .apexcharts-theme-dark .apexcharts-menu-icon svg,
    .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
        fill: #f3f4f5;
    }

    .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
        fill: #008FFB;
    }

    .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
    .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
    .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
    .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
        fill: #333;
    }

    .apexcharts-selection-icon,
    .apexcharts-menu-icon {
        position: relative;
    }

    .apexcharts-reset-icon {
        margin-left: 5px;
    }

    .apexcharts-zoom-icon,
    .apexcharts-reset-icon,
    .apexcharts-menu-icon {
        transform: scale(0.85);
    }

    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon {
        transform: scale(0.7)
    }

    .apexcharts-zoomout-icon {
        margin-right: 3px;
    }

    .apexcharts-pan-icon {
        transform: scale(0.62);
        position: relative;
        left: 1px;
        top: 0px;
    }

    .apexcharts-pan-icon svg {
        fill: #fff;
        stroke: #6E8192;
        stroke-width: 2;
    }

    .apexcharts-pan-icon.apexcharts-selected svg {
        stroke: #008FFB;
    }

    .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
        stroke: #333;
    }

    .apexcharts-toolbar {
        position: absolute;
        z-index: 11;
        top: 0px;
        right: 3px;
        max-width: 176px;
        text-align: right;
        border-radius: 3px;
        padding: 0px 6px 2px 6px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .apexcharts-toolbar svg {
        pointer-events: none;
    }

    .apexcharts-menu {
        background: #fff;
        position: absolute;
        top: 100%;
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 3px;
        right: 10px;
        opacity: 0;
        min-width: 110px;
        transition: 0.15s ease all;
        pointer-events: none;
    }

    .apexcharts-menu.apexcharts-menu-open {
        opacity: 1;
        pointer-events: all;
        transition: 0.15s ease all;
    }

    .apexcharts-menu-item {
        padding: 6px 7px;
        font-size: 12px;
        cursor: pointer;
    }

    .apexcharts-theme-light .apexcharts-menu-item:hover {
        background: #eee;
    }

    .apexcharts-theme-dark .apexcharts-menu {
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
    }

    @media screen and (min-width: 768px) {

        .apexcharts-canvas:hover .apexcharts-toolbar {
            opacity: 1;
        }
    }

    .apexcharts-datalabel.apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-pie-label,
    .apexcharts-datalabels,
    .apexcharts-datalabel,
    .apexcharts-datalabel-label,
    .apexcharts-datalabel-value {
        cursor: default;
        pointer-events: none;
    }

    .apexcharts-pie-label-delay {
        opacity: 0;
        animation-name: opaque;
        animation-duration: 0.3s;
        animation-fill-mode: forwards;
        animation-timing-function: ease;
    }

    .apexcharts-canvas .apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-hide .apexcharts-series-points {
        opacity: 0;
    }

    .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-radar-series path,
    .apexcharts-radar-series polygon {
        pointer-events: none;
    }

    /* markers */

    .apexcharts-marker {
        transition: 0.15s ease all;
    }

    @keyframes opaque {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    /* Resize generated styles */
    @keyframes resizeanim {
        from {
            opacity: 0;
        }

        to {
            opacity: 0;
        }
    }

    .resize-triggers {
        animation: 1ms resizeanim;
        visibility: hidden;
        opacity: 0;
    }

    .resize-triggers,
    .resize-triggers>div,
    .contract-trigger:before {
        content: " ";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        overflow: hidden;
    }

    .resize-triggers>div {
        background: #eee;
        overflow: auto;
    }

    .contract-trigger:before {
        width: 200%;
        height: 200%;
    }
    </style>
    <style type="text/css">
    .apexcharts-canvas {
        position: relative;
        user-select: none;
        /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
    }

    /* scrollbar is not visible by default for legend, hence forcing the visibility */
    .apexcharts-canvas ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 6px;
    }

    .apexcharts-canvas ::-webkit-scrollbar-thumb {
        border-radius: 4px;
        background-color: rgba(0, 0, 0, .5);
        box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
    }

    .apexcharts-canvas.apexcharts-theme-dark {
        background: #343F57;
    }

    .apexcharts-inner {
        position: relative;
    }

    .apexcharts-text tspan {
        font-family: inherit;
    }

    .legend-mouseover-inactive {
        transition: 0.15s ease all;
        opacity: 0.20;
    }

    .apexcharts-series-collapsed {
        opacity: 0;
    }

    .apexcharts-gridline,
    .apexcharts-annotation-rect {
        pointer-events: none;
    }

    .apexcharts-tooltip {
        border-radius: 5px;
        box-shadow: 2px 2px 6px -4px #999;
        cursor: default;
        font-size: 14px;
        left: 62px;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        top: 20px;
        overflow: hidden;
        white-space: nowrap;
        z-index: 12;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-theme-light {
        border: 1px solid #e3e3e3;
        background: rgba(255, 255, 255, 0.96);
    }

    .apexcharts-tooltip.apexcharts-theme-dark {
        color: #fff;
        background: rgba(30, 30, 30, 0.8);
    }

    .apexcharts-tooltip * {
        font-family: inherit;
    }

    .apexcharts-tooltip .apexcharts-marker,
    .apexcharts-area-series .apexcharts-area,
    .apexcharts-line {
        pointer-events: none;
    }

    .apexcharts-tooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip-title {
        padding: 6px;
        font-size: 15px;
        margin-bottom: 4px;
    }

    .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
        background: #ECEFF1;
        border-bottom: 1px solid #ddd;
    }

    .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
        background: rgba(0, 0, 0, 0.7);
        border-bottom: 1px solid #333;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        display: inline-block;
        font-weight: 600;
        margin-left: 5px;
    }

    .apexcharts-tooltip-text-z-label:empty,
    .apexcharts-tooltip-text-z-value:empty {
        display: none;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        font-weight: 600;
    }

    .apexcharts-tooltip-marker {
        width: 12px;
        height: 12px;
        position: relative;
        top: 0px;
        margin-right: 10px;
        border-radius: 50%;
    }

    .apexcharts-tooltip-series-group {
        padding: 0 10px;
        display: none;
        text-align: left;
        justify-content: left;
        align-items: center;
    }

    .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
        opacity: 1;
    }

    .apexcharts-tooltip-series-group.apexcharts-active,
    .apexcharts-tooltip-series-group:last-child {
        padding-bottom: 4px;
    }

    .apexcharts-tooltip-series-group-hidden {
        opacity: 0;
        height: 0;
        line-height: 0;
        padding: 0 !important;
    }

    .apexcharts-tooltip-y-group {
        padding: 6px 0 5px;
    }

    .apexcharts-tooltip-candlestick {
        padding: 4px 8px;
    }

    .apexcharts-tooltip-candlestick>div {
        margin: 4px 0;
    }

    .apexcharts-tooltip-candlestick span.value {
        font-weight: bold;
    }

    .apexcharts-tooltip-rangebar {
        padding: 5px 8px;
    }

    .apexcharts-tooltip-rangebar .category {
        font-weight: 600;
        color: #777;
    }

    .apexcharts-tooltip-rangebar .series-name {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .apexcharts-xaxistooltip {
        opacity: 0;
        padding: 9px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
        transition: 0.15s ease all;
    }

    .apexcharts-xaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-xaxistooltip:after,
    .apexcharts-xaxistooltip:before {
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-xaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-left: -6px;
    }

    .apexcharts-xaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-left: -7px;
    }

    .apexcharts-xaxistooltip-bottom:after,
    .apexcharts-xaxistooltip-bottom:before {
        bottom: 100%;
    }

    .apexcharts-xaxistooltip-top:after,
    .apexcharts-xaxistooltip-top:before {
        top: 100%;
    }

    .apexcharts-xaxistooltip-bottom:after {
        border-bottom-color: #ECEFF1;
    }

    .apexcharts-xaxistooltip-bottom:before {
        border-bottom-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top:after {
        border-top-color: #ECEFF1
    }

    .apexcharts-xaxistooltip-top:before {
        border-top-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
        border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
        border-top-color: rgba(0, 0, 0, 0.5);
    }


    .apexcharts-xaxistooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-yaxistooltip {
        opacity: 0;
        padding: 4px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
    }

    .apexcharts-yaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-yaxistooltip:after,
    .apexcharts-yaxistooltip:before {
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-yaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-top: -6px;
    }

    .apexcharts-yaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-top: -7px;
    }

    .apexcharts-yaxistooltip-left:after,
    .apexcharts-yaxistooltip-left:before {
        left: 100%;
    }

    .apexcharts-yaxistooltip-right:after,
    .apexcharts-yaxistooltip-right:before {
        right: 100%;
    }

    .apexcharts-yaxistooltip-left:after {
        border-left-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-left:before {
        border-left-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right:after {
        border-right-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-right:before {
        border-right-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip.apexcharts-active {
        opacity: 1;
    }

    .apexcharts-yaxistooltip-hidden {
        display: none;
    }

    .apexcharts-xcrosshairs,
    .apexcharts-ycrosshairs {
        pointer-events: none;
        opacity: 0;
        transition: 0.15s ease all;
    }

    .apexcharts-xcrosshairs.apexcharts-active,
    .apexcharts-ycrosshairs.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-ycrosshairs-hidden {
        opacity: 0;
    }

    .apexcharts-zoom-rect {
        pointer-events: none;
    }

    .apexcharts-selection-rect {
        cursor: move;
    }

    .svg_select_points,
    .svg_select_points_rot {
        opacity: 0;
        visibility: hidden;
    }

    .svg_select_points_l,
    .svg_select_points_r {
        cursor: ew-resize;
        opacity: 1;
        visibility: visible;
        fill: #888;
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
        cursor: crosshair
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-pan {
        cursor: move
    }


    .apexcharts-zoom-icon,
    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon,
    .apexcharts-reset-icon,
    .apexcharts-pan-icon,
    .apexcharts-selection-icon,
    .apexcharts-menu-icon,
    .apexcharts-toolbar-custom-icon {
        cursor: pointer;
        width: 20px;
        height: 20px;
        line-height: 24px;
        color: #6E8192;
        text-align: center;
    }


    .apexcharts-zoom-icon svg,
    .apexcharts-zoomin-icon svg,
    .apexcharts-zoomout-icon svg,
    .apexcharts-reset-icon svg,
    .apexcharts-menu-icon svg {
        fill: #6E8192;
    }

    .apexcharts-selection-icon svg {
        fill: #444;
        transform: scale(0.76)
    }

    .apexcharts-theme-dark .apexcharts-zoom-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
    .apexcharts-theme-dark .apexcharts-reset-icon svg,
    .apexcharts-theme-dark .apexcharts-pan-icon svg,
    .apexcharts-theme-dark .apexcharts-selection-icon svg,
    .apexcharts-theme-dark .apexcharts-menu-icon svg,
    .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
        fill: #f3f4f5;
    }

    .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
        fill: #008FFB;
    }

    .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
    .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
    .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
    .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
        fill: #333;
    }

    .apexcharts-selection-icon,
    .apexcharts-menu-icon {
        position: relative;
    }

    .apexcharts-reset-icon {
        margin-left: 5px;
    }

    .apexcharts-zoom-icon,
    .apexcharts-reset-icon,
    .apexcharts-menu-icon {
        transform: scale(0.85);
    }

    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon {
        transform: scale(0.7)
    }

    .apexcharts-zoomout-icon {
        margin-right: 3px;
    }

    .apexcharts-pan-icon {
        transform: scale(0.62);
        position: relative;
        left: 1px;
        top: 0px;
    }

    .apexcharts-pan-icon svg {
        fill: #fff;
        stroke: #6E8192;
        stroke-width: 2;
    }

    .apexcharts-pan-icon.apexcharts-selected svg {
        stroke: #008FFB;
    }

    .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
        stroke: #333;
    }

    .apexcharts-toolbar {
        position: absolute;
        z-index: 11;
        top: 0px;
        right: 3px;
        max-width: 176px;
        text-align: right;
        border-radius: 3px;
        padding: 0px 6px 2px 6px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .apexcharts-toolbar svg {
        pointer-events: none;
    }

    .apexcharts-menu {
        background: #fff;
        position: absolute;
        top: 100%;
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 3px;
        right: 10px;
        opacity: 0;
        min-width: 110px;
        transition: 0.15s ease all;
        pointer-events: none;
    }

    .apexcharts-menu.apexcharts-menu-open {
        opacity: 1;
        pointer-events: all;
        transition: 0.15s ease all;
    }

    .apexcharts-menu-item {
        padding: 6px 7px;
        font-size: 12px;
        cursor: pointer;
    }

    .apexcharts-theme-light .apexcharts-menu-item:hover {
        background: #eee;
    }

    .apexcharts-theme-dark .apexcharts-menu {
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
    }

    @media screen and (min-width: 768px) {

        .apexcharts-canvas:hover .apexcharts-toolbar {
            opacity: 1;
        }
    }

    .apexcharts-datalabel.apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-pie-label,
    .apexcharts-datalabels,
    .apexcharts-datalabel,
    .apexcharts-datalabel-label,
    .apexcharts-datalabel-value {
        cursor: default;
        pointer-events: none;
    }

    .apexcharts-pie-label-delay {
        opacity: 0;
        animation-name: opaque;
        animation-duration: 0.3s;
        animation-fill-mode: forwards;
        animation-timing-function: ease;
    }

    .apexcharts-canvas .apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-hide .apexcharts-series-points {
        opacity: 0;
    }

    .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-radar-series path,
    .apexcharts-radar-series polygon {
        pointer-events: none;
    }

    /* markers */

    .apexcharts-marker {
        transition: 0.15s ease all;
    }

    @keyframes opaque {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    /* Resize generated styles */
    @keyframes resizeanim {
        from {
            opacity: 0;
        }

        to {
            opacity: 0;
        }
    }

    .resize-triggers {
        animation: 1ms resizeanim;
        visibility: hidden;
        opacity: 0;
    }

    .resize-triggers,
    .resize-triggers>div,
    .contract-trigger:before {
        content: " ";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        overflow: hidden;
    }

    .resize-triggers>div {
        background: #eee;
        overflow: auto;
    }

    .contract-trigger:before {
        width: 200%;
        height: 200%;
    }
    </style>
</head>

<body class="">
    <!-- [ Pre-loader ] start -->

    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menu-light navbar-collapsed">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div ps">

                <div class="">
                    <div class="main-menu-header">
                        <img class="img-radius" src="{{ asset('assets/images/user/1646715544604.jpeg') }}" alt="User-Profile-Image">
                        <div class="user-details">
                            <div id="more-details">Intan Permatasari <i class="fa fa-caret-down"></i></div>
                        </div>
                    </div>
                    <div class="collapse" id="nav-user-link">
                        <ul class="list-unstyled">
                            <li class="list-group-item"><a href="user-profile.html"><i
                                        class="feather icon-user m-r-5"></i>View Profile</a></li>
                            <li class="list-group-item"><a href="auth-normal-sign-in.html"><i
                                        class="feather icon-log-out m-r-5"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>

                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Menu</label>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>

                    <li class="nav-item">
                        <a href='{{ route ("kos.list")}}' class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Kos</span></a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Laporan</span></a>
                    </li>

                    <li class="nav-item pcoded-hasmenu">

                        <ul class="pcoded-submenu">
                            <li><a href="auth-signup.html" target="_blank">Sign up</a></li>
                            <li><a href="auth-signin.html" target="_blank">Sign in</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"></li>

                </ul>
            </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">


        <div class="m-header">
            <a class="mobile-menu on" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{ asset('images/logo.jpeg') }}" alt="" class="logo" style="width: 175px; height: auto;">
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">

            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">

                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="#!" class="m-r-10">mark as read</a>
                                    <a href="#!">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body ps">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
                            </ul>
                            <div class="noti-footer">
                                <a href="#!">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle has-ripple" data-toggle="dropdown" aria-expanded="false">
                            <i class="feather icon-user"></i>
                            <span class="ripple ripple-animate"
                                style="height: 40px; width: 40px; animation-duration: 0.7s; animation-timing-function: linear; background: rgb(255, 255, 255); opacity: 0.4; top: -13px; left: -7px;"></span></a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i>
                                        Profile</a></li>
                                <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i>
                                        My Messages</a></li>
                                <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i>
                                        Lock Screen</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>


    </header>
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Dashboard</h5>
                            </div>
                            <div class="content">
                                <div class="container-fluid" id="kontenHTML">
                                    <!-- Main content -->
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Data Kamar</h3>
                                                            <div>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <form action="{{ route('admin.store') }}" method="POST">
                                                                @csrf
                                                                <label>Nama Kos</label></br>
                                                                <input type="text" name="nama_kos"
                                                                    class="from-control"></br>
                                                                <label>Alamat Kos</label></br>
                                                                <input type="text" name="alamat_kos" 
                                                                    class="from-control"></br>
                                                                <label>Status Kos</label></br>
                                                                <input type="text" name="status_kos" 
                                                                    class="from-control"></br>
                                                                <label>Jenis Kos</label></br>
                                                                <input type="text" name="jenis_kos"
                                                                    class="from-control"></br></br>
                                                                    <button class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>
                                                        
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!-- [ Main Content ] end -->
                            </div>
                        </div>
    <!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ripple.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>


    <!-- custom-chart js -->
    <script src="{{ asset('assets/js/pages/dashboard-main.js') }}"></script>



    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg><svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg><svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
</body>

</html>