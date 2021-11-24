'use strict'

$(document).ready(function(){
    $('#Form-secondaryTabs .tab-pane.layout-cell:not(:first-child)').addClass('padded-pane');
    autosize($('.autosize textarea'))
});
