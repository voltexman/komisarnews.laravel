var selectElements = document.querySelectorAll('select');

selectElements.forEach(function (select) {
  var numberOfOptions = select.children.length;

  select.classList.add('select-hidden');

  var selectWrapper = document.createElement('div');
  selectWrapper.classList.add('select');
  select.parentNode.insertBefore(selectWrapper, select.nextSibling);

  var selectStyled = document.createElement('div');
  selectStyled.classList.add('select-styled');
  selectStyled.textContent = select.children[0].textContent;
  selectWrapper.appendChild(selectStyled);

  var selectOptions = document.createElement('ul');
  selectOptions.classList.add('select-options');
  selectWrapper.appendChild(selectOptions);

  for (var i = 0; i < numberOfOptions; i++) {
    var option = select.children[i];

    var listItem = document.createElement('li');
    listItem.textContent = option.textContent;
    listItem.setAttribute('rel', option.value);
    selectOptions.appendChild(listItem);
  }

  var listItems = selectOptions.children;

  selectStyled.addEventListener('click', function (e) {
    e.stopPropagation();
    var activeSelects = document.querySelectorAll('div.select-styled.active');
    for (var i = 0; i < activeSelects.length; i++) {
      var activeSelect = activeSelects[i];
      if (activeSelect !== this) {
        activeSelect.classList.remove('active');
        activeSelect.nextElementSibling.style.display = 'none';
      }
    }
    this.classList.toggle('active');
    this.nextElementSibling.style.display = this.classList.contains('active') ? 'block' : 'none';
  });

  for (var i = 0; i < listItems.length; i++) {
    listItems[i].addEventListener('click', function (e) {
      e.stopPropagation();
      selectStyled.textContent = this.textContent;
      selectStyled.classList.remove('active');
      select.value = this.getAttribute('rel');
      selectOptions.style.display = 'none';
    });
  }

  document.addEventListener('click', function () {
    selectStyled.classList.remove('active');
    selectOptions.style.display = 'none';
  });
});
