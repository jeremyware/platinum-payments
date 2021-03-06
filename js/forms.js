function ownerDisplay(a) {
 if (a == 1)
  document.getElementById("secondary-owner").style.display = "none";
 else
  document.getElementById("secondary-owner").style.display = "block";
}


const init = function () {
 document.getElementById('button-next').addEventListener('click', reset);
 document.getElementById('button-submit').addEventListener('click', send);
}

const reset = function (ev) {

 ev.preventDefault();

 document.getElementById('form-user').reset();

}

const send = function (ev) {
 ev.preventDefault();
 ev.stopPropagation();

 let fails = validate();

 if (fails.length === 0) {

  document.getElementById('form-user').submit();
 } else {
  fails.forEach(function (obj) {
   let field = document.getElementById(obj.input);
   field.parentElement.classList.add('error');
   field.parentElement.setAttribute('data-errormsg', obj.msg);
  })
 }
}

const validate = function (ev) {

 let failures = [];

 let chk = document.getElementById('input-');

 if (!chk.checked) {
  failures.push({
   input: 'input-',
   msg: 'Must complete submit.'
  })
 }


 let select = document.getElementById('input-age');
 if (select.selectedIndex === 0) {
  failures.push({
   input: 'input-age',
   msg: 'Invalid Number'
  })
 }


 let first = document.getElementById('input-first');
 let password = document.getElementById('input-password');
 let email = document.getElementById('input-email');
 if (first.value === "") {
  failures.push({
   input: 'input-first',
   msg: 'Required Field'
  })
 }
 if (password.value === "" || password.value.length < 8) {
  failures.push({
   input: 'input-password',
   msg: 'Must be at least 8 chars'
  })
 }
 if (email.value === "") {
  failures.push({
   input: 'input-email',
   msg: 'Required Field'
  })
 }

 return failures;
}

$('form').on('submit', function () {
 $(this).find('input[type="tel"]').each(function () {
  $(this).val() = $(this).val().replace(/[\s().+-]/g, '');
 });
 $(this).find('input[name="ssn"]').each(function () {
  $(this).val() = $(this).val().replace(/-/g, '');
 });
});


document.addEventListener('DOMContentLoaded', init);