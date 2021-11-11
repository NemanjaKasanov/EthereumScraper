let _totalTransactions = 1;
let _perPage = 20;
let _pageNumber = 1;
let _hasNextPage = false;

$(document).ready(function () {

    $(document).on('click', '.pagination-arrow', function () {
        const direction = $(this).data('direction');
        
        if (direction == 'prev') {
            _pageNumber = --_pageNumber;
        }
        else if (direction == 'next') {
            if (_hasNextPage) {
                _pageNumber = ++_pageNumber;
            }
        }
        else {
            _pageNumber = 1;
        }

        if (_pageNumber < 1) {
            _pageNumber = 1;
        }

        search();
        $('#page-number').html(_pageNumber);
    });

});
