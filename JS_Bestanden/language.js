function update() {
    const lang = document.getElementById('langselector')
    const value = lang.options[lang.selectedIndex].value;
    console.log(value);

    const allInBody = document.querySelectorAll('body > *');
    for (const element of allInBody) {
      const langAttribute = element.getAttribute("lang");
      if (langAttribute) {
        console.log(langAttribute, value)
        if (value === langAttribute) {
          element.style.display = "block"
        } else {
          element.style.display = "none"
        }
      }
    }
  }
  update()