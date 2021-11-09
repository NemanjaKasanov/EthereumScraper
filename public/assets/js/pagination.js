let _totalTransactions = 1;
let _perPage = 20;
let _pageNumber = 1;

$(document).ready(function () {

    $(document).on('click', '.pagination-arrow', function () {
        const direction = $(this).data('direction');
        
        if (direction == 'prev') {
            _pageNumber = --_pageNumber;
        }
        else if (direction == 'next') {
            _pageNumber = ++_pageNumber;
        }
        else {
            _pageNumber = 1;
        }

        if (_pageNumber < 1) {
            _pageNumber = 1;
        }

        // -----------------------------------
        // dodati do koje strane je moguce ici
        // -----------------------------------

        search();
        $('#page-number').html(_pageNumber);
    });

});
