if (navigator.appName == 'Microsoft Internet Explorer' || !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/))) {
	document.getElementById('frmOrder').innerHTML = 'Internet Explorer detected. This browser is not supported. Please use a <a href="https://bestvpn.org/outdatedbrow" target="_blank" rel="noopener noreferrer">modern browser</a> to place an order.';
}



var maxFileSize = 100 * 1024 * 1024;  // 100 MB
var currentFileSize = 0;
var requiredFields = {
	'TransactionType': 'Transaction Type',
	'PropertyType': 'Property Type',
	'email': 'Email For Confirmation'
	};

function makeCounter() {
    var count = 1;
    return function() {
        count++;
        return count;
    };
};

function setBuyerSwitch() {
    jQuery('input[type=radio][name*=buyertype]').change(function() {
		if (this.value == 'person') {
			jQuery(this).closest('.additionalbuyer').children('.buyercompany').hide();
			jQuery(this).closest('.additionalbuyer').children('.buyercompany').val('');
			jQuery(this).closest('.additionalbuyer').children('.buyername').show();
		} else {
			jQuery(this).closest('.additionalbuyer').children('.buyername').hide();
			jQuery(this).closest('.additionalbuyer').children('.buyername').val('');
			jQuery(this).closest('.additionalbuyer').children('.buyercompany').show(); 
		}
    });    
}

function setSellerSwitch() {
    jQuery('input[type=radio][name*=sellertype]').change(function() {
		if (this.value == 'person') {
			jQuery(this).closest('.additionalseller').children('.sellercompany').hide(); 
			jQuery(this).closest('.additionalseller').children('.sellercompany').val(''); 
			jQuery(this).closest('.additionalseller').children('.sellername').show(); 
		} else {
			jQuery(this).closest('.additionalseller').children('.sellername').hide(); 
			jQuery(this).closest('.additionalseller').children('.sellername').val('');
			jQuery(this).closest('.additionalseller').children('.sellercompany').show(); 
		}
    });
}

function capitalize(str) {
	return str.charAt(0).toUpperCase() + str.slice(1);
}

jQuery(document).ready(function() {
	
	var buyerCounter = makeCounter();
	var sellerCounter = makeCounter();
	
	// input masks
	jQuery('.date').mask('99/99/9999', {placeholder:"mm/dd/yyyy"});
	jQuery('.phone').mask('(999) 999-9999');
	jQuery('.money').autoNumeric('init', {aPad: false, lZero: "deny"});
    
    // Add buyer
    jQuery('#btnAddBuyer').click(function(event) {
	   	event.preventDefault();
	   	var c = buyerCounter();
	    if (c < 6) {
				var copy = jQuery('.buyer').clone();
				copy.prepend('<hr/>');
		    copy.attr('class', 'additionalbuyer');
		    copy.find('input[type=text]').val('');
		    copy.find('input[type=radio][name=buyertype]').attr({name: 'buyertype' + c}); 
		    copy.find('input').each(function(i) {
			   jQuery(this).attr('tabindex', c + i); 
		    });
		    copy.appendTo('.additionalbuyers');
		    setBuyerSwitch();
		    jQuery('.phone').mask('(999) 999-9999');
		} else {
			alert('A maximum of 5 buyers is allowed.');
		}
	    return false;
    });
    
    // Add seller
    jQuery('#btnAddSeller').click(function(event) {
	   	event.preventDefault();
	   	var c = sellerCounter();
	   	if (c < 6) {
				var copy = jQuery('.seller').clone();
				copy.prepend('<hr/>');
		    copy.attr('class', 'additionalseller');
		    copy.find('input[type=text]').val('');
		    copy.find('input[type=radio][name=sellertype]').attr({name: 'sellertype' + c}); 
		    copy.find('input').each(function(i) {
			   jQuery(this).attr('tabindex', c + i);
		    });
		    copy.appendTo('.additionalsellers');
		    setSellerSwitch();
		    jQuery('.phone').mask('(999) 999-9999');
		} else {
			alert('A maximum of 5 sellers is allowed.');
		}
	    return false;
    });
        
    // Add requirements fields
    jQuery('#btnAddRequirement').click(function(event) {
	    event.preventDefault();
	    var copy = jQuery('.requirements').clone();
	    copy.attr('class', 'additionalrequirement');
	    copy.appendTo('.additionalrequirements');
	    return false;	
    });	
    
    // Add exceptions fields
    jQuery('#btnAddException').click(function(event) {
	    event.preventDefault();
	    var copy = jQuery('.exceptions').clone();
	    copy.attr('class', 'additionalexception');
	    copy.appendTo('.additionalexceptions');
	    return false;	    	    
    });	   
    
    // check file size
    jQuery('#woeFile').bind('change', function() {
	    if (window.FileReader && window.File && window.FileList && window.Blob) {    
	    	currentFileSize = this.files[0].size;
	    }
		if (currentFileSize > maxFileSize) {
			alert('File attachment is too large.  Maximum file size is 100 MB.');
		}
	});
    
    // form submission
    jQuery('#frmOrder').submit(function(event) {
	    var errors = [];
	    
	    // required fields
	    jQuery('.required').each(function(index) {
			var el = jQuery(this);
		   if (el.val() == '') {
			   errors.push('- Enter ' + requiredFields[el.attr('name')]); 
		   } 
	    });
	    
	    // file upload size
		if (currentFileSize > maxFileSize) {
			errors.push('- File attachment is too large.  Maximum file size is 100 MB.');
		} 
		
		if (errors.length > 0) {
			alert('Please fix the following:\r\n' + errors.join('\r\n'));
			return false;	
		} else {
			var c = confirm('Are you ready to submit this order?');
			return c;			
		}
    });

    // toggle buyer/seller type
    jQuery('input[type=radio][name=buyertype]').change(function() {
		if (this.value == 'person') {
			jQuery(this).closest('.buyer').children('.buyercompany').hide(); 
			jQuery(this).closest('.buyer').children('.buyercompany').val('');
			jQuery(this).closest('.buyer').children('.buyername').show();
		} else {
			jQuery(this).closest('.buyer').children('.buyername').hide();
			jQuery(this).closest('.buyer').children('.buyername').val('');
			jQuery(this).closest('.buyer').children('.buyercompany').show(); 
		}
    });
    
    jQuery('input[type=radio][name=sellertype]').change(function() {
		if (this.value == 'person') {
			jQuery(this).closest('.seller').children('.sellername').show(); 
			jQuery(this).closest('.seller').children('.sellercompany').hide(); 
		} else {
			jQuery(this).closest('.seller').children('.sellername').hide(); 
			jQuery(this).closest('.seller').children('.sellercompany').show(); 
		}
    });
    
    // state defaults
    jQuery('.state').val('WI');
    
    // capitalize input
    jQuery('.capitalize').keyup(function() {
	    var inputValue = jQuery(this).val();
		if (inputValue && inputValue.length >= 1) {
			jQuery(this).val(capitalize(inputValue));
		}    
    });
    
    
});
