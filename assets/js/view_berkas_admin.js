$(document).ready(function () {
    $('#modalPdfAdmin').on('show.bs.modal', function (e) {
        let getdata = $(e.relatedTarget).data('id');
        console.log(`ini path nya berupa ${path}${getdata}`);
        let tampil = `<embed src="${path}/files/${getdata}" type="application/pdf" width="100%" height="100%">`
        $('#tampil').html(tampil);
    })
});
