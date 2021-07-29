<?php
/**
 * Newsletter signup form template
 *
 * @package Astro
 */

?>

<div class="col-lg-6 my-auto newsletter-signup-form">
    <style type="text/css">
      @import url(https://static.mailerlite.com/assets/plugins/groot/modules/includes/groot_fonts/import.css?version=1627462);
    </style>
    <style type="text/css">
      .ml-form-embedSubmitLoad {display: inline-block;width: 20px;height: 20px}
      .sr-only {position: absolute;width: 1px;height: 1px;padding: 0;margin: -1px;overflow: hidden;clip: rect(0, 0, 0, 0);border: 0}
      .ml-form-embedSubmitLoad:after {content: " ";display: block;width: 11px;height: 11px;margin: 1px;border-radius: 50%;border: 4px solid #fff;border-color: #fff #fff #fff transparent;animation: ml-form-embedSubmitLoad 1.2s linear infinite}
      @keyframes ml-form-embedSubmitLoad {
        0% {transform: rotate(0)}
        100% {transform: rotate(360deg)}
      }
      #mlb2-4476949.ml-form-embedContainer {box-sizing: border-box;display: table;margin: 0 auto;position: static;width: 100% !important}
      #mlb2-4476949.ml-form-embedContainer button, #mlb2-4476949.ml-form-embedContainer h4, #mlb2-4476949.ml-form-embedContainer p, #mlb2-4476949.ml-form-embedContainer span {text-transform: none !important;letter-spacing: normal !important}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper {background-color: #fff;border-width: 0;border-color: transparent;border-radius: 0;border-style: solid;box-sizing: border-box;display: inline-block !important;margin: 0;padding: 0;position: relative}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper.embedDefault, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper.embedPopup {width: 100%}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper.embedForm {max-width: 100%;width: 100%; border-radius: 42px;}
      #mlb2-4476949.ml-form-embedContainer .ml-form-align-left {text-align: left}
      #mlb2-4476949.ml-form-embedContainer .ml-form-align-center {text-align: center}
      #mlb2-4476949.ml-form-embedContainer .ml-form-align-default {display: table-cell !important;vertical-align: middle !important;text-align: center !important}
      #mlb2-4476949.ml-form-embedContainer .ml-form-align-right {text-align: right}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedHeader img {border-top-left-radius: 0;border-top-right-radius: 0;height: auto;margin: 0 auto !important;max-width: 100%;width: undefinedpx}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody {padding: 12px 20px 0 20px}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody.ml-form-embedBodyHorizontal {padding-bottom: 0}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent {text-align: left;margin: 0 0 20px 0}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent h4, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent h4 {color: #474aae;font-family: 'Roboto', Arial, Helvetica, sans-serif;font-size: 22px;font-weight: 400;margin: 10px 0 10px 0;text-align: left;word-break: break-word}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p {color: #000;font-family: 'Roboto', Arial, Helvetica, sans-serif;font-size: 14px;font-weight: 400;line-height: 20px;margin: 0 0 10px 0;text-align: left}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ul, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ul {color: #000;font-family: 'Roboto', Arial, Helvetica, sans-serif;font-size: 14px}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol ol, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol ol {list-style-type: lower-alpha}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol ol ol, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol ol ol {list-style-type: lower-roman}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p a, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p a {color: #000;text-decoration: underline}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-block-form .ml-field-group {text-align: left !important}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-block-form .ml-field-group label {margin-bottom: 5px;color: #333;font-size: 14px;font-family: 'Roboto', Arial, Helvetica, sans-serif;font-weight: 700;font-style: normal;text-decoration: none;display: inline-block;line-height: 20px}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p:last-child, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p:last-child {margin: 0}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody form {margin: 0;width: 100%}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-formContent {margin: 0 0 20px 0;width: 100%}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow {float: left}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-formContent.horozintalForm {margin: 0;padding: 0 0 12px 0;width: 100%;height: auto;float: left}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow {margin: 0 0 10px 0;width: 100%}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow.ml-last-item {margin: 0}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow.ml-formfieldHorizintal {margin: 0}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input {background-color: #fff !important;color: #474aae !important;border-color: #ccc;border-radius: 0 !important;border-style: solid !important;border-width: 0 !important;font-family: 'Roboto', Arial, Helvetica, sans-serif;font-size: 18px !important;height: auto;line-height: 21px !important;margin-bottom: 0;margin-top: 0;margin-left: 0;margin-right: 0;padding: 10px 10px !important;width: 100% !important;box-sizing: border-box !important;max-width: 100% !important}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input::-webkit-input-placeholder, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input::-webkit-input-placeholder {color: #474aae}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input::-moz-placeholder, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input::-moz-placeholder {color: #474aae}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input:-ms-input-placeholder, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input:-ms-input-placeholder {color: #474aae}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input:-moz-placeholder, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input:-moz-placeholder {color: #474aae}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow textarea, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow textarea {background-color: #fff !important;color: #474aae !important;border-color: #ccc !important;border-radius: 0 !important;border-style: solid !important;border-width: 0 !important;font-family: 'Roboto', Arial, Helvetica, sans-serif;font-size: 18px !important;height: auto;line-height: 21px !important;margin-bottom: 0;margin-top: 0;padding: 10px 10px !important;width: 100% !important;box-sizing: border-box !important;max-width: 100% !important}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before {border-color: #ccc !important;background-color: #fff !important}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input.custom-control-input[type=checkbox] {box-sizing: border-box;padding: 0;position: absolute;z-index: -1;opacity: 0;margin-top: 5px;margin-left: -1.5rem;overflow: visible}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before {border-radius: 4px !important}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type=checkbox]:checked ~ .label-description::after, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox input[type=checkbox]:checked ~ .label-description::after, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input:checked ~ .custom-control-label::after, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input:checked ~ .custom-control-label::after, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox input[type=checkbox]:checked ~ .label-description::after {background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e")}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input:checked ~ .custom-control-label::after {background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type=checkbox]:checked ~ .label-description::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox input[type=checkbox]:checked ~ .label-description::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input:checked ~ .custom-control-label::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-input:checked ~ .custom-control-label::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox input[type=checkbox]:checked ~ .label-description::before {border-color: #e60f53 !important;background-color: #e60f53 !important;color: #fff !important}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::after, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::after, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::after, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::after, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::before {top: 2px;box-sizing: border-box}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before {top: 0 !important;box-sizing: border-box !important}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before {top: 0 !important;box-sizing: border-box !important}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::after {top: 0 !important;box-sizing: border-box !important;position: absolute;left: -1.5rem;display: block;width: 1rem;height: 1rem;content: ""}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before {top: 0 !important;box-sizing: border-box !important}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-control-label::before {position: absolute;top: 4px;left: -1.5rem;display: block;width: 16px;height: 16px;pointer-events: none;content: "";background-color: #fff;border: #adb5bd solid 1px;border-radius: 50%}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-control-label::after {position: absolute;top: 2px !important;left: -1.5rem;display: block;width: 1rem;height: 1rem;content: ""}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before {position: absolute;top: 4px;left: -1.5rem;display: block;width: 16px;height: 16px;pointer-events: none;content: "";background-color: #fff;border: #adb5bd solid 1px;border-radius: 50%}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after {position: absolute;top: 0 !important;left: -1.5rem;display: block;width: 1rem;height: 1rem;content: ""}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after {position: absolute;top: 0 !important;left: -1.5rem;display: block;width: 1rem;height: 1rem;content: ""}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-radio .custom-control-label::after {background: no-repeat 50%/50% 50%}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-checkbox .custom-control-label::after, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::after {background: no-repeat 50%/50% 50%}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-control, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-control {position: relative;display: block;min-height: 1.5rem;padding-left: 1.5rem}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-input {position: absolute;z-index: -1;opacity: 0;box-sizing: border-box;padding: 0}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label {color: #000;font-size: 12px !important;font-family: 'Roboto', Arial, Helvetica, sans-serif;line-height: 22px;margin-bottom: 0;position: relative;vertical-align: top;font-style: normal;font-weight: 700}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-select, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-select {background-color: #fff !important;color: #474aae !important;border-color: #ccc !important;border-radius: 0 !important;border-style: solid !important;border-width: 0 !important;font-family: 'Roboto', Arial, Helvetica, sans-serif;font-size: 18px !important;line-height: 20px !important;margin-bottom: 0;margin-top: 0;padding: 10px 28px 10px 12px !important;width: 100% !important;box-sizing: border-box !important;max-width: 100% !important;height: auto;display: inline-block;vertical-align: middle;background: url(https://cdn.mailerlite.com/images/default/dropdown.svg) no-repeat right .75rem center/8px 10px;-webkit-appearance: none;-moz-appearance: none;appearance: none}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow {height: auto;width: 100%;float: left}
      .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal {width: 70%;float: left;margin-top: 6px}
      .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-button-horizontal {width: 30%;float: left}
      .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-button-horizontal.labelsOn {padding-top: 25px}
      .ml-form-formContent.horozintalForm .ml-form-horizontalRow .horizontal-fields {box-sizing: border-box;float: left;padding-right: 10px}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input {background-color: #fff;color: #474aae;border-color: #ccc;border-radius: 0;border-style: solid;border-width: 0;font-family: 'Roboto', Arial, Helvetica, sans-serif;font-size: 18px;line-height: 20px;margin-bottom: 0;margin-top: 0;padding: 10px 10px;width: 100%;box-sizing: border-box;overflow-y: initial}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow button {background-color: #e60f53 !important;border-color: #e60f53;border-style: solid;border-width: 0;border-radius: 42px;box-shadow: none;color: #fff !important;cursor: pointer;font-family: 'Roboto', Arial, Helvetica, sans-serif;font-size: 14px !important;font-weight: 700;line-height: 20px;margin: 0 !important;padding: 15px !important;width: 100%;height: auto}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow button:hover {background-color: #481c6e !important;border-color: #481c6e !important}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type=checkbox] {box-sizing: border-box;padding: 0;position: absolute;z-index: -1;opacity: 0;margin-top: 5px;margin-left: -1.5rem;overflow: visible}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description {color: #000;display: block;font-family: 'Roboto', Arial, Helvetica, sans-serif;font-size: 12px;text-align: left;margin-bottom: 0;position: relative;vertical-align: top}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label {font-weight: 400;margin: 0;padding: 0;position: relative;display: block;min-height: 24px;padding-left: 24px}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label a {color: #000;text-decoration: underline}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label p {color: #000 !important;font-family: 'Roboto', Arial, Helvetica, sans-serif !important;font-size: 12px !important;font-weight: 400 !important;line-height: 18px !important;padding: 0 !important;margin: 0 5px 0 0 !important}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label p:last-child {margin: 0}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit {margin: 0 0 20px 0;float: left;width: 100%}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button {background-color: #e60f53 !important;border: none !important;border-radius: 0 !important;box-shadow: none !important;color: #fff !important;cursor: pointer;font-family: 'Roboto', Arial, Helvetica, sans-serif !important;font-size: 14px !important;font-weight: 700 !important;line-height: 21px !important;height: auto;padding: 10px !important;width: 100% !important;box-sizing: border-box !important}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button.loading {display: none}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button:hover {background-color: #481c6e !important}
      .ml-subscribe-close {width: 30px;height: 30px;background: url(https://cdn.mailerlite.com/images/default/modal_close.png) no-repeat;background-size: 30px;cursor: pointer;margin-top: -10px;margin-right: -10px;position: absolute;top: 0;right: 0}
      .ml-error input {border-color: red !important}
      .ml-error .label-description, .ml-error .label-description p, .ml-error .label-description p a, .ml-error label:first-child {color: red !important}
      #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow.ml-error .label-description p, #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow.ml-error .label-description p:first-letter {color: red !important}
      @media only screen and (max-width: 400px) {
        .ml-form-embedWrapper.embedDefault, .ml-form-embedWrapper.embedPopup {width: 100% !important}
        .ml-form-formContent.horozintalForm {float: left !important}
        .ml-form-formContent.horozintalForm .ml-form-horizontalRow {height: auto !important;width: 100% !important;float: left !important}
        .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal {width: 100% !important}
        .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal > div {padding-right: 0 !important;padding-bottom: 10px}
        .ml-form-formContent.horozintalForm .ml-button-horizontal {width: 100% !important}
        .ml-form-formContent.horozintalForm .ml-button-horizontal.labelsOn {padding-top: 0 !important}
      }
    </style>
    <style type="text/css">
      .ml-mobileButton-horizontal {display: none}
      #mlb2-4476949 .ml-mobileButton-horizontal button {background-color: #e60f53 !important;border-color: #e60f53 !important;border-style: solid !important;border-width: 0 !important;border-radius: 42px !important;box-shadow: none !important;color: #fff !important;cursor: pointer;font-family: 'Roboto', Arial, Helvetica, sans-serif !important;font-size: 14px !important;font-weight: 700 !important;line-height: 20px !important;padding: 10px !important;width: 100% !important}
      @media only screen and (max-width: 660px) {
        #mlb2-4476949.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-formContent.horozintalForm {padding: 0 0 10px 0 !important}
        .ml-hide-horizontal {display: none !important}
        .ml-form-formContent.horozintalForm .ml-button-horizontal {display: none !important}
        .ml-mobileButton-horizontal {display: inline-block !important;margin-bottom: 20px;width: 100%}
        .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal > div {padding-bottom: 0 !important}
      }
    </style>
    <style type="text/css">
      @media only screen and (max-width: 660px) {
        .ml-form-formContent.horozintalForm .ml-form-horizontalRow .horizontal-fields {margin-bottom: 10px !important;width: 100% !important}
      }
    </style>
    <div id="mlb2-4476949" class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-4476949">
        <div class="ml-form-align-center">
            <div class="ml-form-embedWrapper embedForm">
                <div class="ml-form-embedBody ml-form-embedBodyHorizontal row-form">
                    <div class="ml-form-embedContent" style="margin-bottom:0"></div>
                    <form class="ml-block-form" action="https://static.mailerlite.com/webforms/submit/q9g9f8"
                          data-code="q9g9f8" method="post" target="_blank">
                        <div class="ml-form-formContent horozintalForm">
                            <div class="ml-form-horizontalRow">
                                <div class="ml-input-horizontal">
                                    <div style="width:100%" class="horizontal-fields">
                                        <div class="ml-field-group ml-field-email ml-validate-email ml-validate-required">
                                            <input type="email" class="form-control" data-inputmask=""
                                                   name="fields[email]" placeholder="Email" autocomplete="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="ml-button-horizontal primary">
                                    <button type="submit" class="primary">FELIRATKOZOM</button>
                                    <button disabled="disabled" style="display:none" type="button" class="loading">
                                        <div class="ml-form-embedSubmitLoad"></div>
                                        <span class="sr-only">Loading...</span></button>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="ml-submit" value="1">
                        <div class="ml-mobileButton-horizontal">
                            <button type="submit" class="primary">FELIRATKOZOM</button>
                            <button disabled="disabled" style="display:none" type="button" class="loading">
                                <div class="ml-form-embedSubmitLoad"></div>
                                <span class="sr-only">Loading...</span></button>
                        </div>
                        <input type="hidden" name="anticsrf" value="true">
                    </form>
                </div>
                <div class="ml-form-successBody row-success" style="display:none">
                    <div class="ml-form-successContent">
                        <h4>A feliratkozáshoz szükséges megerősítő emailt elküldtük.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
      function ml_webform_success_4476949() {
        var r = ml_jQuery || jQuery;
        r('.ml-subscribe-form-4476949 .row-success').show(), r('.ml-subscribe-form-4476949 .row-form').hide();
      }
    </script>
    <img src="https://track.mailerlite.com/webforms/o/4476949/q9g9f8?v1627473035" width="1" height="1"
         style="max-width:1px;max-height:1px;visibility:hidden;padding:0;margin:0;display:block" alt="." border="0">
    <script src="https://static.mailerlite.com/js/w/webforms.min.js?v0c75f831c56857441820dcec3163967c"
            type="text/javascript"></script>
</div>
