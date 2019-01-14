@extends('layout-master.app-pegawai')
@section('title', 'QIS OFFICE | TAMBAH DATA PESERTA DIDIK')

@push('css')
    <style>
        /**/
        /* normal state */
        /**/
        .sky-form {
        .toggle i:before {
            background-color: #6dc5dd;
        }
        .button {
            background-color: #6dc5dd;
        }

        }


        /**/
        /* hover state */
        /**/
        .sky-form {
        .input:hover input,
        .select:hover select,
        .textarea:hover textarea,
        .radio:hover i,
        .checkbox:hover i,
        .toggle:hover i {
            border-color: #dc9596;
        }
        .rating {
        & input + label:hover,
        & input + label:hover ~ label {
              color: #6dc5dd;
          }
        }
        }


        /**/
        /* focus state */
        /**/
        .sky-form .input input:focus,
        .sky-form .select select:focus,
        .sky-form .textarea textarea:focus,
        .sky-form .radio input:focus + i,
        .sky-form .checkbox input:focus + i,
        .sky-form .toggle input:focus + i {
            border-color: #6dc5dd;
        }


        /**/
        /* checked state */
        /**/
        .sky-form .radio input + i:after {
            background-color: #6dc5dd;
        }
        .sky-form .checkbox input + i:after {
            color: #6dc5dd;
        }
        .sky-form .radio input:checked + i,
        .sky-form .checkbox input:checked + i,
        .sky-form .toggle input:checked + i {
            border-color: #6dc5dd;
        }
        .sky-form .rating input:checked ~ label {
            color: #6dc5dd;
        }
        /**/
        /* font */
        /**/
        @import "font-style.css";


        /**/
        /* defaults */
        /**/
        .sky-form {
            margin: 0;
            outline: none;
            box-shadow: 0 0 10px rgba(0,0,0,.3);
            font: 13px/1.55 'Open Sans', Helvetica, Arial, sans-serif;
            color: #666;
        }
        .sky-form * {
            margin: 0;
            padding: 0;
        }
        .sky-form header {
            display: block;
            padding: 20px 30px;
            border-bottom: 1px solid rgba(0,0,0,.1);
            background: rgba(248,248,248,.9);
            font-size: 25px;
            font-weight: 300;
            color: #232323;
        }
        .sky-form fieldset {
            display: block;
            padding: 25px 30px 5px;
            border: none;
            background: rgba(255,255,255,.9);
        }
        .sky-form fieldset + fieldset {
            border-top: 1px solid rgba(0,0,0,.1);
        }
        .sky-form section {
            margin-bottom: 20px;
        }
        .sky-form footer {
            display: block;
            padding: 15px 30px 25px;
            border-top: 1px solid rgba(0,0,0,.1);
            background: rgba(248,248,248,.9);
        }
        .sky-form footer:after {
            content: '';
            display: table;
            clear: both;
        }
        .sky-form a {
            color: #2da5da;
        }
        .sky-form .label {
            display: block;
            margin-bottom: 6px;
            line-height: 19px;
        }
        .sky-form .label.col {
            margin: 0;
            padding-top: 10px;
        }
        .sky-form .note {
            margin-top: 6px;
            padding: 0 1px;
            font-size: 11px;
            line-height: 15px;
            color: #999;
        }
        .sky-form .input,
        .sky-form .select,
        .sky-form .textarea,
        .sky-form .radio,
        .sky-form .checkbox,
        .sky-form .toggle,
        .sky-form .button {
            position: relative;
            display: block;
        }
        .sky-form .input input,
        .sky-form .select select,
        .sky-form .textarea textarea {
            display: block;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            width: 100%;
            height: 39px;
            padding: 8px 10px;
            outline: none;
            border-width: 2px;
            border-style: solid;
            border-radius: 0;
            background: #fff;
            font: 15px/19px 'Open Sans', Helvetica, Arial, sans-serif;
            color: #404040;
            appearance: normal;
            -moz-appearance: none;
            -webkit-appearance: none;
        }


        /**/
        /* file inputs */
        /**/
        .sky-form .input-file .button {
            position: absolute;
            top: 4px;
            right: 4px;
            float: none;
            height: 31px;
            margin: 0;
            padding: 0 20px;
            font-size: 13px;
            line-height: 31px;
        }
        .sky-form .input-file .button:hover {
            box-shadow: none;
        }
        .sky-form .input-file .button input {
            position: absolute;
            top: 0;
            right: 0;
            padding: 0;
            font-size: 30px;
            cursor: pointer;
            opacity: 0;
        }


        /**/
        /* selects */
        /**/
        .sky-form .select i {
            position: absolute;
            top: 14px;
            right: 14px;
            width: 1px;
            height: 11px;
            background: #fff;
            box-shadow: 0 0 0 12px #fff;
        }
        .sky-form .select i:after,
        .sky-form .select i:before {
            content: '';
            position: absolute;
            right: 0;
            border-right: 4px solid transparent;
            border-left: 4px solid transparent;
        }
        .sky-form .select i:after {
            bottom: 0;
            border-top: 4px solid #404040;
        }
        .sky-form .select i:before {
            top: 0;
            border-bottom: 4px solid #404040;
        }
        .sky-form .select-multiple select {
            height: auto;
        }


        /**/
        /* textareas */
        /**/
        .sky-form .textarea textarea {
            height: auto;
            resize: none;
        }
        .sky-form .textarea-resizable textarea {
            resize: vertical;
        }
        .sky-form .textarea-expandable textarea {
            height: 39px;
        }
        .sky-form .textarea-expandable textarea:focus {
            height: auto;
        }


        /**/
        /* radios and checkboxes */
        /**/
        .sky-form .radio,
        .sky-form .checkbox {
            margin-bottom: 4px;
            padding-left: 27px;
            font-size: 15px;
            line-height: 27px;
            color: #404040;
            cursor: pointer;
        }
        .sky-form .radio:last-child,
        .sky-form .checkbox:last-child {
            margin-bottom: 0;
        }
        .sky-form .radio input,
        .sky-form .checkbox input {
            position: absolute;
            left: -9999px;
        }
        .sky-form .radio i,
        .sky-form .checkbox i {
            position: absolute;
            top: 5px;
            left: 0;
            display: block;
            width: 13px;
            height: 13px;
            outline: none;
            border-width: 2px;
            border-style: solid;
            background: #fff;
        }
        .sky-form .radio i {
            border-radius: 50%;
        }
        .sky-form .radio input + i:after,
        .sky-form .checkbox input + i:after {
            position: absolute;
            opacity: 0;
            transition: opacity 0.1s;
            -o-transition: opacity 0.1s;
            -ms-transition: opacity 0.1s;
            -moz-transition: opacity 0.1s;
            -webkit-transition: opacity 0.1s;
        }
        .sky-form .radio input + i:after {
            content: '';
            top: 4px;
            left: 4px;
            width: 5px;
            height: 5px;
            border-radius: 50%;
        }
        .sky-form .checkbox input + i:after {
            content: '\f00c';
            top: -1px;
            left: -1px;
            width: 15px;
            height: 15px;
            font: normal 12px/16px FontAwesome;
            text-align: center;
        }
        .sky-form .radio input:checked + i:after,
        .sky-form .checkbox input:checked + i:after {
            opacity: 1;
        }
        .sky-form .inline-group {
            margin: 0 -30px -4px 0;
        }
        .sky-form .inline-group:after {
            content: '';
            display: table;
            clear: both;
        }
        .sky-form .inline-group .radio,
        .sky-form .inline-group .checkbox {
            float: left;
            margin-right: 30px;
        }
        .sky-form .inline-group .radio:last-child,
        .sky-form .inline-group .checkbox:last-child {
            margin-bottom: 4px;
        }


        /**/
        /* toggles */
        /**/
        .sky-form .toggle {
            margin-bottom: 4px;
            padding-right: 61px;
            font-size: 15px;
            line-height: 27px;
            color: #404040;
            cursor: pointer;
        }
        .sky-form .toggle:last-child {
            margin-bottom: 0;
        }
        .sky-form .toggle input {
            position: absolute;
            left: -9999px;
        }
        .sky-form .toggle i {
            content: '';
            position: absolute;
            top: 4px;
            right: 0;
            display: block;
            width: 49px;
            height: 17px;
            border-width: 2px;
            border-style: solid;
            border-radius: 12px;
            background: #fff;
        }
        .sky-form .toggle i:after {
            content: 'OFF';
            position: absolute;
            top: 2px;
            right: 8px;
            left: 8px;
            font-style: normal;
            font-size: 9px;
            line-height: 13px;
            font-weight: 700;
            text-align: left;
            color: #5f5f5f;
        }
        .sky-form .toggle i:before {
            content: '';
            position: absolute;
            z-index: 1;
            top: 4px;
            right: 4px;
            display: block;
            width: 9px;
            height: 9px;
            border-radius: 50%;
            opacity: 1;
            transition: right 0.2s;
            -o-transition: right 0.2s;
            -ms-transition: right 0.2s;
            -moz-transition: right 0.2s;
            -webkit-transition: right 0.2s;
        }
        .sky-form .toggle input:checked + i:after {
            content: 'ON';
            text-align: right;
        }
        .sky-form .toggle input:checked + i:before {
            right: 36px;
        }


        /**/
        /* ratings */
        /**/
        .sky-form .rating {
            margin-bottom: 4px;
            font-size: 15px;
            line-height: 27px;
            color: #404040;
        }
        .sky-form .rating:last-child {
            margin-bottom: 0;
        }
        .sky-form .rating input {
            position: absolute;
            left: -9999px;
        }
        .sky-form .rating label {
            display: block;
            float: right;
            height: 17px;
            margin-top: 5px;
            padding: 0 2px;
            font-size: 17px;
            line-height: 17px;
            cursor: pointer;
        }


        /**/
        /* buttons */
        /**/
        .sky-form .button {
            float: right;
            height: 39px;
            overflow: hidden;
            margin: 10px 0 0 20px;
            padding: 0 25px;
            outline: none;
            border: 0;
            font: 300 15px/39px 'Open Sans', Helvetica, Arial, sans-serif;
            text-decoration: none;
            color: #fff;
            cursor: pointer;
        }



        .sky-form [class^="fa-"],
        .ui-datepicker [class^="fa-"] {
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            -webkit-font-smoothing: antialiased;
        }
        .sky-form .icon-append,
        .sky-form .icon-prepend {
            position: absolute;
            top: 5px;
            width: 29px;
            height: 29px;
            font-size: 15px;
            line-height: 29px;
            text-align: center;
        }
        .sky-form .icon-append {
            right: 5px;
            padding-left: 3px;
            border-left-width: 1px;
            border-left-style: solid;
        }
        .sky-form .icon-prepend {
            left: 5px;
            padding-right: 3px;
            border-right-width: 1px;
            border-right-style: solid;
        }
        .sky-form .input .icon-prepend + input,
        .sky-form .textarea .icon-prepend + textarea {
            padding-left: 46px;
        }
        .sky-form .input .icon-append + input,
        .sky-form .textarea .icon-append + textarea {
            padding-right: 46px;
        }
        .sky-form .input .icon-prepend + .icon-append + input,
        .sky-form .textarea .icon-prepend + .icon-append + textarea {
            padding-left: 46px;
        }


        /**/
        /* grid */
        /**/
        .sky-form .row {
            margin: 0 -15px;
        }
        .sky-form .row:after {
            content: '';
            display: table;
            clear: both;
        }
        .sky-form .col {
            float: left;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }
        .sky-form .col-1 {
            width: 8.33%;
        }
        .sky-form .col-2 {
            width: 16.66%;
        }
        .sky-form .col-3 {
            width: 25%;
        }
        .sky-form .col-4 {
            width: 33.33%;
        }
        .sky-form .col-5 {
            width: 41.66%;
        }
        .sky-form .col-6 {
            width: 50%;
        }
        .sky-form .col-8 {
            width: 66.67%;
        }
        .sky-form .col-9 {
            width: 75%;
        }
        .sky-form .col-10 {
            width: 83.33%;
        }
        @media screen and (max-width: 600px) {
            .sky-form .col {
                float: none;
                width: 100%;
            }
        }


        /**/
        /* tooltips */
        /**/
        .sky-form .tooltip {
            position: absolute;
            z-index: 1;
            left: -9999px;
            padding: 2px 8px 3px;
            font-size: 11px;
            line-height: 16px;
            font-weight: 400;
            background: rgba(0,0,0,0.9);
            color: #fff;
            opacity: 0;
            transition: margin 0.3s, opacity 0.3s;
            -o-transition: margin 0.3s, opacity 0.3s;
            -ms-transition: margin 0.3s, opacity 0.3s;
            -moz-transition: margin 0.3s, opacity 0.3s;
            -webkit-transition: margin 0.3s, opacity 0.3s;
        }
        .sky-form .tooltip:after {
            content: '';
            position: absolute;
        }
        .sky-form .input input:focus + .tooltip,
        .sky-form .textarea textarea:focus + .tooltip {
            opacity: 1;
        }

        .sky-form .tooltip-top-right {
            bottom: 100%;
            margin-bottom: 15px;
        }
        .sky-form .tooltip-top-right:after {
            top: 100%;
            right: 16px;
            border-top: 4px solid rgba(0,0,0,0.9);
            border-right: 4px solid transparent;
            border-left: 4px solid transparent;
        }
        .sky-form .input input:focus + .tooltip-top-right,
        .sky-form .textarea textarea:focus + .tooltip-top-right {
            right: 0;
            left: auto;
            margin-bottom: 5px;
        }

        .sky-form .tooltip-top-left {
            bottom: 100%;
            margin-bottom: 15px;
        }
        .sky-form .tooltip-top-left:after {
            top: 100%;
            left: 16px;
            border-top: 4px solid rgba(0,0,0,0.9);
            border-right: 4px solid transparent;
            border-left: 4px solid transparent;
        }
        .sky-form .input input:focus + .tooltip-top-left,
        .sky-form .textarea textarea:focus + .tooltip-top-left {
            right: auto;
            left: 0;
            margin-bottom: 5px;
        }

        .sky-form .tooltip-right {
            top: 9px;
            white-space: nowrap;
            margin-left: 15px;
        }
        .sky-form .tooltip-right:after {
            top: 6px;
            right: 100%;
            border-top: 4px solid transparent;
            border-right: 4px solid rgba(0,0,0,0.9);
            border-bottom: 4px solid transparent;
        }
        .sky-form .input input:focus + .tooltip-right,
        .sky-form .textarea textarea:focus + .tooltip-right {
            left: 100%;
            margin-left: 5px;
        }

        .sky-form .tooltip-left {
            top: 9px;
            white-space: nowrap;
            margin-right: 15px;
        }
        .sky-form .tooltip-left:after {
            top: 6px;
            left: 100%;
            border-top: 4px solid transparent;
            border-bottom: 4px solid transparent;
            border-left: 4px solid rgba(0,0,0,0.9);
        }
        .sky-form .input input:focus + .tooltip-left,
        .sky-form .textarea textarea:focus + .tooltip-left {
            right: 100%;
            left: auto;
            margin-right: 5px;
        }

        .sky-form .tooltip-bottom-right {
            top: 100%;
            margin-top: 15px;
        }
        .sky-form .tooltip-bottom-right:after {
            bottom: 100%;
            right: 16px;
            border-right: 4px solid transparent;
            border-bottom: 4px solid rgba(0,0,0,0.9);
            border-left: 4px solid transparent;
        }
        .sky-form .input input:focus + .tooltip-bottom-right,
        .sky-form .textarea textarea:focus + .tooltip-bottom-right {
            right: 0;
            left: auto;
            margin-top: 5px;
        }

        .sky-form .tooltip-bottom-left {
            top: 100%;
            margin-top: 15px;
        }
        .sky-form .tooltip-bottom-left:after {
            bottom: 100%;
            left: 16px;
            border-right: 4px solid transparent;
            border-bottom: 4px solid rgba(0,0,0,0.9);
            border-left: 4px solid transparent;
        }
        .sky-form .input input:focus + .tooltip-bottom-left,
        .sky-form .textarea textarea:focus + .tooltip-bottom-left {
            right: auto;
            left: 0;
            margin-top: 5px;
        }


        /**/
        /* normal state */
        /**/
        .sky-form .input input,
        .sky-form .select select,
        .sky-form .textarea textarea,
        .sky-form .radio i,
        .sky-form .checkbox i,
        .sky-form .toggle i,
        .sky-form .icon-append,
        .sky-form .icon-prepend {
            border-color: #e5e5e5;
            transition: border-color 0.3s;
            -o-transition: border-color 0.3s;
            -ms-transition: border-color 0.3s;
            -moz-transition: border-color 0.3s;
            -webkit-transition: border-color 0.3s;
        }
        .sky-form .toggle i:before {
            background-color: #2da5da;
        }
        .sky-form .rating label {
            color: #ccc;
            transition: color 0.3s;
            -o-transition: color 0.3s;
            -ms-transition: color 0.3s;
            -moz-transition: color 0.3s;
            -webkit-transition: color 0.3s;
        }
        .sky-form .button {
            background-color: #2da5da;
            opacity: 0.8;
            transition: opacity 0.2s;
            -o-transition: opacity 0.2s;
            -ms-transition: opacity 0.2s;
            -moz-transition: opacity 0.2s;
            -webkit-transition: opacity 0.2s;
        }
        .sky-form .button.button-secondary {
            background-color: #b3b3b3;
        }
        .sky-form .icon-append,
        .sky-form .icon-prepend {
            color: #ccc;
        }


        /**/
        /* hover state */
        /**/
        .sky-form .input:hover input,
        .sky-form .select:hover select,
        .sky-form .textarea:hover textarea,
        .sky-form .radio:hover i,
        .sky-form .checkbox:hover i,
        .sky-form .toggle:hover i {
            border-color: #8dc9e5;
        }
        .sky-form .rating input + label:hover,
        .sky-form .rating input + label:hover ~ label {
            color: #2da5da;
        }
        .sky-form .button:hover {
            opacity: 1;
        }


        /**/
        /* focus state */
        /**/
        .sky-form .input input:focus,
        .sky-form .select select:focus,
        .sky-form .textarea textarea:focus,
        .sky-form .radio input:focus + i,
        .sky-form .checkbox input:focus + i,
        .sky-form .toggle input:focus + i {
            border-color: #2da5da;
        }


        /**/
        /* checked state */
        /**/
        .sky-form .radio input + i:after {
            background-color: #2da5da;
        }
        .sky-form .checkbox input + i:after {
            color: #2da5da;
        }
        .sky-form .radio input:checked + i,
        .sky-form .checkbox input:checked + i,
        .sky-form .toggle input:checked + i {
            border-color: #2da5da;
        }
        .sky-form .rating input:checked ~ label {
            color: #2da5da;
        }


        /**/
        /* error state */
        /**/
        .sky-form .state-error input,
        .sky-form .state-error select,
        .sky-form .state-error textarea,
        .sky-form .radio.state-error i,
        .sky-form .checkbox.state-error i,
        .sky-form .toggle.state-error i {
            background: #fff0f0;
        }
        .sky-form .state-error select + i {
            background: #fff0f0;
            box-shadow: 0 0 0 12px #fff0f0;
        }
        .sky-form .toggle.state-error input:checked + i {
            background: #fff0f0;
        }
        .sky-form .state-error + em {
            display: block;
            margin-top: 6px;
            padding: 0 1px;
            font-style: normal;
            font-size: 11px;
            line-height: 15px;
            color: #ee9393;
        }
        .sky-form .rating.state-error + em {
            margin-top: -4px;
            margin-bottom: 4px;
        }


        /**/
        /* success state */
        /**/
        .sky-form .state-success input,
        .sky-form .state-success select,
        .sky-form .state-success textarea,
        .sky-form .radio.state-success i,
        .sky-form .checkbox.state-success i,
        .sky-form .toggle.state-success i {
            background: #f0fff0;
        }
        .sky-form .state-success select + i {
            background: #f0fff0;
            box-shadow: 0 0 0 12px #f0fff0;
        }
        .sky-form .toggle.state-success input:checked + i {
            background: #f0fff0;
        }
        .sky-form .note-success {
            color: #6fb679;
        }


        /**/
        /* disabled state */
        /**/
        .sky-form .input.state-disabled input,
        .sky-form .select.state-disabled,
        .sky-form .textarea.state-disabled,
        .sky-form .radio.state-disabled,
        .sky-form .checkbox.state-disabled,
        .sky-form .toggle.state-disabled,
        .sky-form .button.state-disabled {
            cursor: default;
            opacity: 0.5;
        }
        .sky-form .input.state-disabled:hover input,
        .sky-form .select.state-disabled:hover select,
        .sky-form .textarea.state-disabled:hover textarea,
        .sky-form .radio.state-disabled:hover i,
        .sky-form .checkbox.state-disabled:hover i,
        .sky-form .toggle.state-disabled:hover i {
            border-color: #e5e5e5;
        }


        /**/
        /* submited state */
        /**/
        .sky-form .message {
            display: none;
            color: #6fb679;
        }
        .sky-form .message i {
            display: block;
            margin: 0 auto 20px;
            width: 81px;
            height: 81px;
            border: 1px solid #6fb679;
            border-radius: 50%;
            font-size: 30px;
            line-height: 81px;
        }
        .sky-form.submited fieldset,
        .sky-form.submited footer {
            display: none;
        }
        .sky-form.submited .message {
            display: block;
            padding: 25px 30px;
            background: rgba(255,255,255,.9);
            font: 300 18px/27px 'Open Sans', Helvetica, Arial, sans-serif;
            text-align: center;
        }


        /**/
        /* datepicker */
        /**/
        .ui-datepicker {
            display: none;
            padding: 10px 12px;
            background: rgba(255,255,255,0.9);
            box-shadow: 0 0 10px rgba(0,0,0,.3);
            font: 13px/1.55 'Open Sans', Helvetica, Arial, sans-serif;
            text-align: center;
            color: #666;
        }
        .ui-datepicker a {
            color: #404040;
        }
        .ui-datepicker-header {
            position: relative;
            margin: -10px -12px 10px;
            padding: 10px;
            border-bottom: 1px solid rgba(0,0,0,.1);
            font-size: 15px;
            line-height: 27px;
        }
        .ui-datepicker-prev,
        .ui-datepicker-next {
            position: absolute;
            top: 0;
            display: block;
            width: 47px;
            height: 47px;
            font-size: 15px;
            line-height: 47px;
            text-decoration: none;
            cursor: pointer;
        }
        .ui-datepicker-prev {
            left: 0;
        }
        .ui-datepicker-next {
            right: 0;
        }
        .ui-datepicker-calendar {
            border-collapse: collapse;
            font-size: 13px;
            line-height: 27px;
        }
        .ui-datepicker-calendar th {
            color: #999;
        }
        .ui-datepicker-calendar a,
        .ui-datepicker-calendar span {
            display: block;
            width: 31px;
            margin: auto;
            text-decoration: none;
            color: #404040;
        }
        .ui-datepicker-calendar a:hover {
            background: rgba(0,0,0,.05);
        }
        .ui-datepicker-calendar span {
            color: #bfbfbf;
        }
        .ui-datepicker-today a {
            font-weight: 700;
        }
        .ui-datepicker-calendar .ui-state-active {
            background: rgba(0,0,0,.05);
            cursor: default;
        }
        .ui-datepicker-inline {
            border: 2px solid #e5e5e5;
            background: #fff;
            box-shadow: none;
        }
        .ui-datepicker-inline .ui-datepicker-calendar {
            width: 100%;
        }


        /**/
        /* modal */
        /**/
        .sky-form-modal {
            position: fixed;
            z-index: 1;
            display: none;
            width: 400px;
        }
        .sky-form-modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            display: none;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
        }
        html, body {
            margin: 0;
            padding: 0;
            background-attachment: fixed;
            background-position: 50% 50%;
            background-size: cover;
        }
        a {
            text-decoration: underline;
        }
        a:hover {
            text-decoration: none;
        }
        .bg-red {
            background-image: url(../img/bg-red.jpg);
        }
        .bg-orange {
            background-image: url(../img/bg-orange.jpg);
        }
        .bg-yellow {
            background-image: url(../img/bg-yellow.jpg);
        }
        .bg-green {
            background-image: url(../img/bg-green.jpg);
        }
        .bg-cyan {
            background-image: url(../img/bg-cyan.jpg);
        }
        .bg-blue {
            background-image: url(../img/bg-blue.jpg);
        }
        .bg-purple {
            background-image: url(../img/bg-purple.jpg);
        }
        .bg-pink {
            background-image: url(../img/bg-pink.jpg);
        }
        .bg-black {
            background:#000;
        }

        .body {

            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
        }
        .body-s {
            max-width: 400px;
        }
        .modal {
            padding: 25px 30px;
            background: rgba(255,255,255,0.9);
            font: 13px/1.55 'Open Sans', Helvetica, Arial, sans-serif;
            color: #666;
        }
        .modal a {
            color: #2da5da;
        }

        @media screen and (max-width: 600px) {
            .body {
                padding: 20px;
            }
        }
    </style>
@endpush
@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Data Peserta Didik</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah Data Peserta Didik</a></li>
                    <li class="breadcrumb-item active">Data Peserta Didik</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                {{ $error }}
                            </div>
                        </div>
                    </div>
            @endforeach
            @endif
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-elements">
                                <form id="form-addPeserta" action="{{route('p-tambah-peserta')}}" enctype="multipart/form-data" method="post">
                                    {{csrf_field()}}
                                    {{--Personal Info--}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h3 class="card-title m-t-15">Info Personal</h3>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nama Peserta Didik <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control input-sm" name="nama" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="jenis-kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="jenis-kelamin" name="kelamin" required>
                                                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>NISN </label>
                                                <input type="text" class="form-control input-sm" name="nisn" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>NIK </label>
                                                <input type="text" class="form-control input-sm" name="nik" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Tempat Lahir <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control input-sm" name="tempat_lahir" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control input-sm" name="tgl_lahir" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="agama">Agama <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="agama" name="agama" required>
                                                        <option value="" disabled selected>Pilih Agama</option>
                                                        @foreach($agama as $agamas)
                                                            <option value="{{$agamas->id}}"> {{$agamas->nama_agama}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="negara">Kewarganegaran <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="negara" name="kewarganegaraan" required>
                                                        <option value="" disabled selected>Pilih Kewarganegaran</option>
                                                        @foreach($negara as $negaras)
                                                            <option value="{{$negaras->id}}"> {{$negaras->nama_negara}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="kebutuhan">Kebutuhan Khusus </label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="kebutuhan" name="kebutuhan">
                                                        <option value="" disabled selected>Pilih Kebutuhan Khusus</option>
                                                        @foreach($kebutuhan as $kebutuhans)
                                                            <option value="{{$kebutuhans->id}}">{{$kebutuhans->kode_kebutuhan}} - {{$kebutuhans->nama_kebutuhan}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat <span class="text-danger">*</span></label>
                                                <textarea name="alamat"  cols="30" rows="10" class="form-control input-sm" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>RT </label>
                                                <input type="text" class="form-control input-sm" name="rt" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>RW </label>
                                                <input type="text" class="form-control input-sm" name="rw" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Dusun </label>
                                                <input type="text" class="form-control input-sm" name="nama_dusun" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Desa/Kelurahan <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control input-sm" name="desa" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="provinsi">Provinsi <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="provinsi" name="provinsi" required>
                                                        <option value="" disabled selected>Pilih Provinsi</option>
                                                        @foreach($provinsi as $key => $provinsis)
                                                            <option value="{{$provinsis->id}}"> {{$provinsis->nama_provinsi}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="kabupaten">Kabupaten <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="kabupaten" name="kabupaten" required>
                                                        <option value="" disabled selected>Pilih Kabupaten</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="kecamatan">Kecamatan <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="kecamatan" name="kecamatan" required>
                                                        <option value="" disabled selected>Pilih Kecamatan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Tanggal Masuk <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control input-sm" name="tgl_masuk" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Kode Pos </label>
                                                <input type="text" class="form-control input-sm" name="kode_pos" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Tinggal </label>
                                                <input type="text" class="form-control input-sm" name="jenis_tinggal" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="negara">Alat Transportasi <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="negara" name="transportasi" required>
                                                        <option value="" disabled selected>Pilih Alat Transportasi</option>
                                                        @foreach( $transportasi as $transportasis)
                                                            <option value="{{$transportasis->id}}">{{$transportasis->nama_transportasi}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Anak Keberapa </label>
                                                <input type="text" class="form-control input-sm" name="anak_ke" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Nomor Telpon Rumah </label>
                                                <input type="text" class="form-control input-sm" name="telpon_rumah" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Nomor Telpon Selular </label>
                                                <input type="text" class="form-control input-sm" name="telpon_selular" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Email </label>
                                                <input type="text" class="form-control input-sm" name="email" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="jenis-kelamin">Penerima KPS <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="jenis-kelamin" name="kps" required>
                                                        <option value="" disabled selected>Pilih</option>
                                                        <option value="Ya">Ya</option>
                                                        <option value="Tidak">Tidak</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Nomor KPS </label>
                                                <input type="text" class="form-control input-sm" name="no_kps" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="jenis-kelamin">Layak PIP <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="jenis-kelamin" name="pip" required>
                                                        <option value="" disabled selected>Pilih</option>
                                                        <option value="Layak">Layak</option>
                                                        <option value="Tidak Layak">Tidak Layak</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="jenis-kelamin">Penerima KIP <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="jenis-kelamin" name="kip" required>
                                                        <option value="" disabled selected>Pilih</option>
                                                        <option value="Ya">Ya</option>
                                                        <option value="Tidak">Tidak</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Nomor KKS </label>
                                                <input type="text" class="form-control input-sm" name="no_kks" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Reg Akta Lahir </label>
                                                <input type="text" class="form-control input-sm" name="reg_akta" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="negara">Lembaga <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="negara" name="lembaga" required>
                                                        <option value="" disabled selected>Pilih Lembaga</option>
                                                        @foreach( $lembaga as $lembagas)
                                                            <option value="{{$lembagas->id}}">{{$lembagas->nama_lembaga}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Upload Foto Peserta Didik</label>
                                                <div>
                                                    <input type="file" name="foto" class="form-control input-sm">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status Peserta didik <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="status" name="status" required>
                                                        <option value="" disabled selected>Pilih Status</option>
                                                        <option value="aktif">Aktif</option>
                                                        <option value="lulus">Tidak Aktif</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--Ayah Info--}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h3 class="card-title m-t-15">Info Ayah</h3>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nama Ayah </label>
                                                <input type="text" class="form-control input-sm" name="nama_ayah" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>NIK Ayah </label>
                                                <input type="text" class="form-control input-sm" name="nik_ayah" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Tahun Lahir Ayah </label>
                                                <input type="text" class="yearpicker form-control input-sm" name="tahun_lahir_ayah" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="jenjang-ayah">Jenjang Pendidikan Ayah </label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="jenjang-ayah" name="jenjang_ayah" >
                                                        <option value="" disabled selected>Pilih Jenjang Pendidikan Ayah</option>
                                                        @foreach($jenjang as $jenjangs)
                                                            <option value="{{$jenjangs->id}}">{{$jenjangs->nama_jenjang}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Pekerjaan Ayah </label>
                                                <input type="text" class="form-control input-sm" name="pekerjaan_ayah" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="penghasilan-ayah">Penghasilan Ayah </label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="penghasilan-ayah" name="penghasilan_ayah" >
                                                        <option value="" disabled selected>Pilih Penghasilan Ayah</option>
                                                        @foreach($penghasilan as $penghasilans)
                                                            <option value="{{$penghasilans->id}}">{{$penghasilans->jumlah_penghasilan}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="kebutuhan-ayah">Kebutuhan Khusus Ayah </label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="kebutuhan-ayah" name="kebutuhan_ayah" >
                                                        <option value="" disabled selected>Pilih Kebutuhan Khusus Ayah</option>
                                                        @foreach($kebutuhan as $kebutuhans)
                                                            <option value="{{$kebutuhans->id}}">{{$kebutuhans->kode_kebutuhan}} - {{$kebutuhans->nama_kebutuhan}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--Ibu Info--}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h3 class="card-title m-t-15">Info Ibu</h3>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nama Ibu <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control input-sm" name="nama_ibu" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>NIK Ibu </label>
                                                <input type="text" class="form-control input-sm" name="nik_ibu" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Tahun Lahir Ibu </label>
                                                <input type="text" class="yearpicker form-control input-sm" name="tahun_lahir_ibu" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="jenjang-ibu">Jenjang Pendidikan Ibu </label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="jenjang-ibu" name="jenjang_ibu" >
                                                        <option value="" disabled selected>Pilih Jenjang Pendidikan Ibu</option>
                                                        @foreach($jenjang as $jenjangs)
                                                            <option value="{{$jenjangs->id}}">{{$jenjangs->nama_jenjang}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Pekerjaan Ibu </label>
                                                <input type="text" class="form-control input-sm" name="pekerjaan_ibu" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="penghasilan-ibu">Penghasilan Ibu </label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="penghasilan-ibu" name="penghasilan_ibu" >
                                                        <option value="" disabled selected>Pilih Penghasilan Ibu</option>
                                                        @foreach($penghasilan as $penghasilans)
                                                            <option value="{{$penghasilans->id}}">{{$penghasilans->jumlah_penghasilan}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="kebutuhan-ibu">Kebutuhan Khusus Ibu </label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="kebutuhan-ibu" name="kebutuhan_ibu" >
                                                        <option value="" disabled selected>Pilih Kebutuhan Khusus Ibu</option>
                                                        @foreach($kebutuhan as $kebutuhans)
                                                            <option value="{{$kebutuhans->id}}">{{$kebutuhans->kode_kebutuhan}} - {{$kebutuhans->nama_kebutuhan}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--Wali Info--}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h3 class="card-title m-t-15">Info Wali</h3>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nama Wali </label>
                                                <input type="text" class="form-control input-sm" name="nama_wali" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>NIK Wali </label>
                                                <input type="text" class="form-control input-sm" name="nik_wali" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Tahun Lahir Wali </label>
                                                <input type="text" class="yearpicker form-control input-sm" name="tahun_lahir_wali" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="jenjang-wali">Jenjang Pendidikan Wali </label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="jenjang-wali" name="jenjang_wali" >
                                                        <option value="" disabled selected>Pilih Jenjang Pendidikan Wali</option>
                                                        @foreach($jenjang as $jenjangs)
                                                            <option value="{{$jenjangs->id}}">{{$jenjangs->nama_jenjang}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Pekerjaan Wali </label>
                                                <input type="text" class="form-control input-sm" name="pekerjaan_wali" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="penghasilan-wali">Penghasilan Wali </label>
                                                <div>
                                                    <select class="form-control form-control-sm custom-select" id="penghasilan-wali" name="penghasilan_wali" >
                                                        <option value="" disabled selected>Pilih Penghasilan Wali</option>
                                                        @foreach($penghasilan as $penghasilans)
                                                            <option value="{{$penghasilans->id}}">{{$penghasilans->jumlah_penghasilan}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    {{--Button--}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <hr>
                                                <button id="addPeserta" type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-primary">Clear</button>
                                                <a href="{{route('p-home')}}" class="btn btn-dark">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# row -->

            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
    </div>
    <!-- End Page wrapper  -->
    <script src="{{asset('js/lib/jquery/jquery.min.js')}}"></script>

    <script>
        $('#provinsi').on('change', function(e){
            console.log(e);
            console.log('waw');
            var provinsi_id = e.target.value;
            $.get('/pegawai/peserta-didik/kabupaten?provinsi_id=' + provinsi_id,function(data) {
                console.log(data);
                $('#kabupaten').empty();
                $('#kabupaten').append('<option disabled selected>Pilih Kabupaten</option>');

                $('#kecamatan').empty();
                $('#kecamatan').append('<option disabled selected>Pilih Kecamatan</option>');

                $.each(data, function(index, kabupatenObj){
                    $('#kabupaten').append('<option value="'+ kabupatenObj.id +'">'+ kabupatenObj.nama_kabupaten +'</option>');
                })
            });
        });

        $('#kabupaten').on('change', function(e){
            console.log(e);
            console.log('waw');
            var provinsi_id = e.target.value;
            $.get('/pegawai/peserta-didik/kecamatan?kabupaten_id=' + provinsi_id,function(data) {
                console.log(data);

                $('#kecamatan').empty();
                $('#kecamatan').append('<option disabled selected>Pilih Kecamatan</option>');

                $.each(data, function(index, kecamatanObj){
                    $('#kecamatan').append('<option value="'+ kecamatanObj.id +'">'+ kecamatanObj.nama_kecamatan +'</option>');
                })
            });
        });

        var fForm = $('#form-addPeserta');
        var fConfirm = $('button#addPeserta');

        fConfirm.on('click', function(e){
            e.preventDefault();
            swal({
                    title: "Tambahkan pegawai?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Iya",
                    cancelButtonText: "Tidak",
                    closeOnConfirm: false,
                    closeOnCancel: true
                },
                function(){
                    fForm.submit();
                });
        });

        $('[name="status"]').change(function () {
            let objChange=$('#pasangan').find('input');
            if ($(this).val()==='Sudah Menikah'){
                objChange.prop('readonly',false);
                }else{
                objChange.prop('readonly',true);
            }
        });
    </script>
@endsection