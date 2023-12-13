function message() {
    var Name = document.getElementById('name');
    var Email = document.getElementById('emsil');
    var Pass = document.getElementById('password');

    const Success = document.getElementById('success');
    const danger = document.getElementById('danger');

    if (Name.value === "" || Email.value === "" || Pass === "") {
        danger.style.display = 'block';
    } else {
        // setTimeout(() => {
        //     Name.value = '';
        //     Email.value = '';
        //     Pass.value = '';
        // }, 2000);

        Success.style.display = 'block';
    }

    setTimeout(() => {
        danger.style.display = 'none';
        Success.style.display = 'none';
    }, 4000);
}