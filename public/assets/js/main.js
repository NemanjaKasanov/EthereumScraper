const baseUrl = 'http://localhost/EthereumScraper/public/';

$(document).ready(function () {

    // setTimeout(function () {
    //     showLoadingIcon();
    // }, 5000);

    hideLoadingIcon();

    $('#submit-button').click(function (event) {
        event.preventDefault();

        const address = $('#address').val();
        const block = $('#block').val();

        getAddressInformation(address);
    });

    // let address = '0xaa7a9ca87d3694b5755f213b5d04094b8d0f0a6f';
    let address = '0x71660c4005ba85c37ccec55d0c4493e66fe775d3';
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
