function validateForm() {
  
  var nameInput = document.getElementById("isimsoyisim");
  var nameValue = nameInput.value.trim();
  if (nameValue == "") {
    alert("Lütfen isim soyisim alanını doldurun.");
    nameInput.focus();
    return false;
  }
  
  
  var emailInput = document.getElementById("mail");
  var emailValue = emailInput.value.trim();
  var emailRegex = /\S+@\S+\.\S+/;
  if (!emailRegex.test(emailValue)) {
    alert("Lütfen geçerli bir e-posta adresi girin.");
    emailInput.focus();
    return false;
  }

  
  var phoneInput = document.getElementById("telefon");
  var phoneValue = phoneInput.value.trim();
  var phoneRegex = /^\d{10}$/;
  if (!phoneRegex.test(phoneValue)) {
    alert("Lütfen geçerli bir telefon numarası girin.");
    phoneInput.focus();
    return false;
  }

  

  
  var subjectInput = document.getElementById("konu");
  var subjectValue = subjectInput.value.trim();
  if (subjectValue == "") {
    alert("Lütfen konu alanını doldurun.");
    subjectInput.focus();
    return false;
  }

  
  var messageInput = document.getElementById("mesaj");
  var messageValue = messageInput.value.trim();
  if (messageValue == "") {
    alert("Lütfen mesaj alanını doldurun.");
    messageInput.focus();
    return false;
  }


  return true;
}
