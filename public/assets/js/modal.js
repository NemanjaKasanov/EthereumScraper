$(document).ready(function () {

    $(document).on('click', '.prevent-default', function (event) {
        event.preventDefault();
    });

    $(document).on('click', '#close-modal', function () {
        hideModal();
    });

});

function showModal(content, title = 'Ethereum Scraper') {
    $('#modal-title').html(title);
    $('#modal-content').html(content);
    $('#modal').modal('show');
}

function hideModal() {
    $('#modal').modal('hide');
}
