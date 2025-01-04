/*{{--toast--}}
<div class="toast toast-onload align-items-center border-0 fade hide text-bg-primary" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body hstack align-items-start gap-6">
        <i class="ti fs-6"></i>
        <div>
            {{--<h5 class="text-white fs-3 mb-1">Welcome to Modernize</h5>--}}
            <h6 class="text-white fs-2 mb-0">Easy to costomize the Template!!!</h6>
        </div>
        <button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
</div>*/

function showToast(type = 'e', m){
    let myAlert = document.querySelectorAll('.toast')[0];
    // myAlert.querySelector('h5').textContent = title;
    myAlert.querySelector('h6').textContent = m;

    if (type !== 's' && type !== 'i' && type !== 'w' && type !== 'e') {
        // positionClass = 'toast-top-full-width';
        type = 'e';
        m = "CONFIGURAÇÃO INVÁLIDA";
    }

    switch (type){
        case 's':
            myAlert.classList.add('text-bg-success')
            myAlert.querySelector('i').classList.add('ti-check')
            break;

        case 'i':
            myAlert.classList.add('text-bg-info')
            myAlert.querySelector('i').classList.add('ti-alert-exclamation')
            break;

        case 'w':
            myAlert.classList.add('text-bg-warning')
            myAlert.querySelector('i').classList.add('ti-alert-triangle')
            break;

        case 'e':
            myAlert.classList.add('text-bg-danger')
            myAlert.querySelector('i').classList.add('ti-alert-triangle')
            break;

        default:
            myAlert.classList.add('text-bg-danger')
            myAlert.querySelector('i').classList.add('ti-alert-triangle')
            break;
    }

    if (myAlert) {
        let bsAlert = new bootstrap.Toast(myAlert);
        bsAlert.show();
    }
}