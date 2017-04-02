/**
 * Created by hakon on 02.04.2017.
 */
function checkNum(value) {
    var input = value.value;
    if (!(/^[0-9]\d*$/.test(input))) {
        var array = Array.from(input);
        for (var i = 0; i < array.length;) {
            if (!(/^[0-9]\d*$/.test(array[i]))) {
                array.splice(i, 1);
            } else i++;
        }
        value.value = array.join('');
    }
}

function checkString(value) {
    var input = value.value;
        if (!(/^[a-zA-ZæøåÆØÅ ]*$/.test(input))) {
        var array = Array.from(input);
        for (var i = 0; i < array.length;) {
            if (!(/[a-zA-ZæøåÆØÅ ]/.test(array[i]))) {
                array.splice(i, 1);
            } else i++;
        }
        value.value = array.join('');
    }
}