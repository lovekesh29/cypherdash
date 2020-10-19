require('./bootstrap');

$(document).ready(function () {
  
    $("#phone").intlTelInput({
      separateDialCode: true,
      hiddenInput: "mobile",
      nationalMode: true,
      initialCountry: "auto",
      utilsScript: site_url + "/js/intl-tel-input/build/js/utils.js"
    });
    $("#phone").on("focusout", function () {
      if (checkPhoneValidation()) {
        $("#phoneErrorLabel").fadeOut(100);
      } else {
        $("#phoneErrorLabel").fadeIn(100);
      }
    });
    $.get("https://ipinfo.io", function () {}, "jsonp").always(function (resp) {
      var countryCode = resp && resp.country ? resp.country : "";
      $("select#country").find("option[data-code=" + countryCode + "]").attr("selected", "selected");
      $("#phone").intlTelInput("setCountry", countryCode);
    });
    $("select#country").on("change", function () {
      var selectedCountryCode = $(this).find('option:selected').data("code"); //    alert(selectedCountryCode);
  
      $("#phone").intlTelInput("setCountry", selectedCountryCode);
    });
    $("form#contactForm").on("submit", function (ev) {
      ev.preventDefault();
      var form = $('#contactForm')[0];
  
      if (form.reportValidity() == false) {
        return;
      }
  
      if (checkPhoneValidation()) {
        $('#hb-preloader').show();
        $("form#contactForm")[0].submit();
      } else {
        $("#phoneErrorLabel").fadeIn(100);
        return;
      }
    });
    function checkPhoneValidation() {
        var isValidPhone = $("#phone").intlTelInput("isValidNumber");
    
        if (isValidPhone) {
          $("#phoneErrorLabel").fadeOut(100);
          var countryData = $("#phone").intlTelInput("getSelectedCountryData").dialCode; //get country code.
    
          $("#dialCode").val(countryData);
          return true;
        } else {
          $("#phoneErrorLabel").fadeIn(100);
          return false;
        }
      }
    });
