// ajax component
// example: onclick="ajax('tr-{{ $item->id }}', '{{ route('hospital.destroy', [$item->id]) }}');"

async function ajax_load(url, params = [], method = 'get',callback = false) {

    /*TODO MUDAR PARA AJAX_LOAD*/
    /*TODO ADICIONAR BLOCK E UNBLOCK*/
    block();
    await $.ajax({
        url: url,
        type: method,
        params: params,
    })
        .then(function (response) {
            // console.log(response);
            showToast('s', 'Dados enviados com sucesso');
            return response.data;
        })
        .catch(function (error) {
            showToast('w', 'Não foi possível realizar ação');
            // console.error(error);
            return [];
        });

    unBlock();
}
