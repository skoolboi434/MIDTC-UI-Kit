var buttonsInDiv2 = [];

// Disable all input fields by default except for the GL input
window.onload = function () {
  var activeFields = document.querySelectorAll('.active-fields input');
  activeFields.forEach(function (input) {
    if (input.id !== 'GL') {
      input.disabled = true;
    }
  });
};

function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData('text', ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData('text');
  var draggedElement = document.getElementById(data);
  var dropZone = ev.target;

  // Check if the dropped element is a button
  if (draggedElement.tagName === 'BUTTON') {
    // Move the button to the drop zone
    dropZone.appendChild(draggedElement);

    // Add or remove button ID from buttonsInDiv2 array
    var buttonId = draggedElement.id;
    if (dropZone.id === 'div2') {
      if (!buttonsInDiv2.includes(buttonId)) {
        buttonsInDiv2.push(buttonId);
      }
    } else {
      buttonsInDiv2 = buttonsInDiv2.filter(function (id) {
        return id !== buttonId;
      });
    }

    // Enable or disable input fields based on buttonsInDiv2 array
    var activeFields = document.querySelectorAll('.active-fields input');
    activeFields.forEach(function (input) {
      if (input.id !== 'GL') {
        input.disabled = buttonsInDiv2.includes(input.id) ? false : true;
      }
    });
  }
}

// Observe changes in div2 to detect button removal
var div2Observer = new MutationObserver(function (mutations) {
  mutations.forEach(function (mutation) {
    mutation.removedNodes.forEach(function (node) {
      if (node.tagName === 'BUTTON') {
        var removedButtonId = node.id;

        // Remove the removed button ID from buttonsInDiv2 array
        buttonsInDiv2 = buttonsInDiv2.filter(function (id) {
          return id !== removedButtonId;
        });

        // Disable the corresponding input field
        var input = document.getElementById(removedButtonId);
        if (input) {
          input.disabled = true;
        }
      }
    });
  });
});

// Start observing changes in div2
div2Observer.observe(document.getElementById('div2'), { childList: true });

// Observe changes in div1 to detect button addition
var div1Observer = new MutationObserver(function (mutations) {
  mutations.forEach(function (mutation) {
    mutation.addedNodes.forEach(function (node) {
      if (node.tagName === 'BUTTON') {
        var addedButtonId = node.id;

        // Disable the corresponding input field
        var input = document.getElementById(addedButtonId);
        if (input) {
          input.disabled = true;
        }
      }
    });
  });
});

// Start observing changes in div1
div1Observer.observe(document.getElementById('div1'), { childList: true });
