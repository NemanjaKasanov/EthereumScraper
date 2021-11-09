function showLoadingIcon() {
    hideContainers();
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

function hideCoinsAnimation() {
    $('#coin-animation').hide();
}

function showContainers() {
    $('#data-containers').show();
}

function hideContainers() {
    $('#data-containers').hide();
}
