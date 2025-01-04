function qs(el) {
    return document.querySelector(el)
}

function calcPercent(props) {
    let valor_bruto = $(props.valor_bruto).cleanVal();
    let desconto = qs(props.desconto).value;
    desconto = desconto.replace(/,/, '.')
    desconto = desconto == '' ? 100 : desconto

    let calculo_desconto = (valor_bruto * desconto) / 100

    let valor_liquido = valor_bruto - calculo_desconto;
    valor_liquido = parseInt(valor_liquido)
    qs(props.valor_liquido).value = valor_liquido
    $(props.valor_liquido).unmask();
    $(props.valor_liquido).mask('R$ 000.000.000.000.000,00', {reverse: true});
}

qs('input[name=gross_value]').addEventListener('keyup', e => {
    calcPercent({
        valor_bruto: 'input[name=gross_value]',
        desconto: 'input[name=discount]',
        valor_liquido: 'input[name=net_value]',
    });
})