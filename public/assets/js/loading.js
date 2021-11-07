function showLoadingIcon() {
    emptyContainers();
    $('#loading-icon-container').show();
}

function hideLoadingIcon() {
    $('#loading-icon-container').hide();
}

function emptyContainers() {
    $('#address-information').html('');
    $('#transactions-information').html('');
}
