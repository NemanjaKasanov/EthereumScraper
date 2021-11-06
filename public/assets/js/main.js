const baseUrl = 'http://localhost/EthereumScraper/public/';

$(document).ready(function () {

    let address = '0xaa7a9ca87d3694b5755f213b5d04094b8d0f0a6f';
    // address = 'asdasd';
    getAddressInformation(address);

});

function getAddressInformation (address) {
    $.ajax({
        url: baseUrl + 'getAddressInformation/' + address,
        method: 'GET',
        success: function (addressInformation) {
            displayAddressInformation(addressInformation);
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function displayAddressInformation(addressInformation) {
    $.ajax({
        url: baseUrl + 'addressInformationHtml',
        method: 'POST',
        dataType: 'JSON',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            address_information: addressInformation
        },
        success: function (html) {
            $('#address-information').html(html);
        },
        error: function (err) {
            console.log(err);
        }
    });
}
