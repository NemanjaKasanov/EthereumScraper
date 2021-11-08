const baseUrl = 'http://localhost/EthereumScraper/public/';

$(document).ready(function () {

    hideLoadingIcon();

    $('#info-icon').click(function () {
        let modalTitle = 'Ethereum Scraper Help';
        let modalContent = `
            <div class="col-12">
                <p>Insert an Ethereum Address to get information on transactions associated with the given address.</p>
                <p>Additionaly, you can input an Ethereum Block number, and the program will display transactions from that block to the current.</p>
            </div>`;
        showModal(modalContent, modalTitle);
    });

    $('#submit-button').click(function () {
        search();
    });

    // let address = '0xaa7a9ca87d3694b5755f213b5d04094b8d0f0a6f';
    // let address = '0x71660c4005ba85c37ccec55d0c4493e66fe775d3';
    // let block = 13572327;
    // getAddressInformation(address);
    // getTransactions(address, block, 20, 1);

});

function search() {
    const address = $('#address').val();
    const block = $('#block').val();
    const perPage = 20;
    const pageNumber = 1;

    if (address != '') {
        hideCoinsAnimation();
        showLoadingIcon();
        getAddressInformation(address);
        getTransactions(address, block, perPage, pageNumber);
    }
}

function getAddressInformation(address) {
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
            hideLoadingIcon();
            $('#address-information').html(html);
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function getTransactions(address, fromBlock, perPage, pageNumber) {
    const url = baseUrl + `getTransactions?address=${address}&from_block=${fromBlock}&per_page=${perPage}&page_number=${pageNumber}`;

    $.ajax({
        url: url,
        method: 'GET',
        success: function (transactions) {
            console.log(transactions);
            if (transactions.status == 1) {
                displayTransactionsData(transactions);
            }
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function displayTransactionsData(transactions) {
    $.ajax({
        url: baseUrl + 'transactionsTableHtml',
        method: 'POST',
        dataType: 'JSON',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            transactions: transactions
        },
        success: function (html) {
            hideLoadingIcon();
            $('#transactions-information').html(html);
        },
        error: function (err) {
            console.log(err);
        }
    });
}
