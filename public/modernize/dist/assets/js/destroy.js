// delete component
// example: onclick="destroy('tr-{{ $item->id }}', '{{ route('hospital.destroy', [$item->id]) }}');"

function destroy(lineId, link) {

    if (confirm('Confirma a remoção desse registro?')) {

        $.ajax({
            url: link,
            type: 'DELETE',
        })
            .then(function (response) {
                // console.log(response);
                if (lineId) {
                    showToast('s', 'Removido com sucesso');
                    $('#' + lineId).remove();
                } else {
                    document.location.reload(true);
                }
            })
            .catch(function (error) {
                showToast('w', 'Não foi possível realizar a remoção');
                // console.error(error);
            });
    }
}
