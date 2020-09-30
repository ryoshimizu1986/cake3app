var nameElement = document.querySelector('#name');
console.log(nameElement);
nameElement.addEventListener('invalid', function(e){
    if (nameElement.validity.valueMissing){
        e.target.setCustomValidity("ちゃんと入力してね");
    } else if (!nameElement.validity.valid) {

    }
}, false);