var container = [
  ['bold', 'italic', 'underline', 'strike'],
  ['blockquote'],
  [{
    'list': 'ordered'
  }, {
    'list': 'bullet'
  }],
  [{
    'indent': '-1'
  }, {
    'indent': '+1'
  }],
  [{
    'header': [1, 2, 3, 4, 5, 6, false]
  }],
  [{
    'align': []
  }],

  ['clean'],
]

// LATAR BELAKANG
Quill.register('modules/counter', function (quill, options) {
  var container = document.querySelector(options.container);
  quill.on('text-change', function () {
    var text = quill.getText();
    container.innerText = (text.split(/\s+/).length - 1) + ' / 400 Kata';
    var limit = 400
    // if (quill.getLength(text.split(/\s+/)) > limit) {
    //   quill.deleteText(limit, quill.getLength(text.split(/\s+/)));
    // alert('sudah melebihi batas kata')
    // }
    if ((text.split(/\s+/).length - 1) > limit) {
      // quill.deleteText(limit, text.split(/\s+/).length);
      document.getElementById('counter').style.color = 'red';
      // alert('sudah melebihi batas kata')
    }
    else {

    }
  });
});

quill = new Quill('#editor', {
  placeholder: 'Latar Belakang',
  theme: 'snow',
  modules: {
    toolbar: {
      container: container
    },
    counter: {
      container: '#counter'
    }
  }
});

quill.on('text-change', function (delta, oldDelta, source) {
  document.querySelector('input[name=latar_belakang]').value = quill.root.innerHTML;
});


// SASARAN
Quill.register('modules/counter', function (quill, options) {
  var container = document.querySelector(options.container);
  quill.on('text-change', function () {
    var text = quill.getText();
    container.innerText = (text.split(/\s+/).length - 1) + ' / 200 Kata';
    var limit1 = 200
    // if (quill.getLength(text.split(/\s+/)) > limit) {
    //   quill.deleteText(limit, quill.getLength(text.split(/\s+/)));
    // alert('sudah melebihi batas kata')
    // }
    if ((text.split(/\s+/).length - 1) > limit1) {
      // quill.deleteText(limit, text.split(/\s+/).length);
      document.getElementById('counter1').style.color = 'red';
      // alert('sudah melebihi batas kata')
    }

  });
});

quill1 = new Quill('#editor1', {
  placeholder: "Sasaran",
  theme: 'snow',
  modules: {
    toolbar: {
      container: container
    },
    counter: {
      container: '#counter1'
    }
  }
});


quill1.on('text-change', function (delta, oldDelta, source) {
  document.querySelector('input[name=sasaran]').value = quill1.root.innerHTML;
});

// IDIKATOR KINERJA

Quill.register('modules/counter', function (quill, options) {
  var container = document.querySelector(options.container);
  quill.on('text-change', function () {
    var text = quill.getText();
    container.innerText = (text.split(/\s+/).length - 1) + ' / 150 Kata';
    var limit2 = 150
    // if (quill.getLength(text.split(/\s+/)) > limit) {
    //   quill.deleteText(limit, quill.getLength(text.split(/\s+/)));
    // alert('sudah melebihi batas kata')
    // }
    if ((text.split(/\s+/).length - 1) > limit2) {
      // quill.deleteText(limit, text.split(/\s+/).length);
      document.getElementById('counter2').style.color = 'red';
      // alert('sudah melebihi batas kata')
    }

  });
});

quill2 = new Quill('#editor2', {
  placeholder: "Indikator Kinerja",
  theme: 'snow',
  modules: {
    toolbar: {
      container: container
    },
    counter: {
      container: '#counter2'
    }
  }
});


quill2.on('text-change', function (delta, oldDelta, source) {
  document.querySelector('input[name=indikator_kinerja]').value = quill2.root.innerHTML;
});

// TARGET
Quill.register('modules/counter', function (quill, options) {
  var container = document.querySelector(options.container);
  quill.on('text-change', function () {
    var text = quill.getText();
    container.innerText = (text.split(/\s+/).length - 1) + ' / 150 Kata';
    var limit3 = 150
    // if (quill.getLength(text.split(/\s+/)) > limit) {
    //   quill.deleteText(limit, quill.getLength(text.split(/\s+/)));
    // alert('sudah melebihi batas kata')
    // }
    if ((text.split(/\s+/).length - 1) > limit3) {
      // quill.deleteText(limit, text.split(/\s+/).length);
      document.getElementById('counter3').style.color = 'red';
      // alert('sudah melebihi batas kata')
    }

  });
});

quill3 = new Quill('#editor3', {
  placeholder: "Target",
  theme: 'snow',
  modules: {
    toolbar: {
      container: container
    },
    counter: {
      container: '#counter3'
    }
  }
});


quill3.on('text-change', function (delta, oldDelta, source) {
  document.querySelector('input[name=target]').value = quill3.root.innerHTML;
});

// SEBELUM

Quill.register('modules/counter', function (quill, options) {
  var container = document.querySelector(options.container);
  quill.on('text-change', function () {
    var text = quill.getText();
    container.innerText = (text.split(/\s+/).length - 1) + ' / 200 Kata';
    var limit4 = 200
    // if (quill.getLength(text.split(/\s+/)) > limit) {
    //   quill.deleteText(limit, quill.getLength(text.split(/\s+/)));
    // alert('sudah melebihi batas kata')
    // }
    if ((text.split(/\s+/).length - 1) > limit4) {
      // quill.deleteText(limit, text.split(/\s+/).length);
      document.getElementById('counter4').style.color = 'red';
      // alert('sudah melebihi batas kata')
    }
  });
});

quill4 = new Quill('#editor4', {
  placeholder: "Kondisi Sebelum adanya Budaya Kerja",
  theme: 'snow',
  modules: {
    toolbar: {
      container: container
    },
    counter: {
      container: '#counter4'
    }
  }
});


quill4.on('text-change', function (delta, oldDelta, source) {
  document.querySelector('input[name=kondisi_sebelum]').value = quill4.root.innerHTML;
});

// implementasi
Quill.register('modules/counter', function (quill, options) {
  var container = document.querySelector(options.container);
  quill.on('text-change', function () {
    var text = quill.getText();
    container.innerText = (text.split(/\s+/).length - 1) + ' / 500 Kata';
    var limit5 = 500
    // if (quill.getLength(text.split(/\s+/)) > limit) {
    //   quill.deleteText(limit, quill.getLength(text.split(/\s+/)));
    // alert('sudah melebihi batas kata')
    // }
    if ((text.split(/\s+/).length - 1) > limit5) {
      // quill.deleteText(limit, text.split(/\s+/).length);
      document.getElementById('counter5').style.color = 'red';
      // alert('sudah melebihi batas kata')
    }
  });
});

quill5 = new Quill('#editor5', {
  placeholder: "Implementasi Budaya Kerja",
  theme: 'snow',
  modules: {
    toolbar: {
      container: container
    },
    counter: {
      container: '#counter5'
    }
  }
});


quill5.on('text-change', function (delta, oldDelta, source) {
  document.querySelector('input[name=implementasi]').value = quill5.root.innerHTML;
});

// Kondisi Sesudah
Quill.register('modules/counter', function (quill, options) {
  var container = document.querySelector(options.container);
  quill.on('text-change', function () {
    var text = quill.getText();
    container.innerText = (text.split(/\s+/).length - 1) + ' / 200 Kata';
    var limit5 = 200
    // if (quill.getLength(text.split(/\s+/)) > limit) {
    //   quill.deleteText(limit, quill.getLength(text.split(/\s+/)));
    // alert('sudah melebihi batas kata')
    // }
    if ((text.split(/\s+/).length - 1) > limit5) {
      // quill.deleteText(limit, text.split(/\s+/).length);
      document.getElementById('counter6').style.color = 'red';
      // alert('sudah melebihi batas kata')
    }
  });
});

quill6 = new Quill('#editor6', {
  placeholder: "Kondisi Sesudah diberlakukan nya budaya kerja",
  theme: 'snow',
  modules: {
    toolbar: {
      container: container
    },
    counter: {
      container: '#counter6'
    }
  }
});


quill6.on('text-change', function (delta, oldDelta, source) {
  document.querySelector('input[name=kondisi_sesudah]').value = quill6.root.innerHTML;
});

// kesimpulan
Quill.register('modules/counter', function (quill, options) {
  var container = document.querySelector(options.container);
  quill.on('text-change', function () {
    var text = quill.getText();
    container.innerText = (text.split(/\s+/).length - 1) + ' / 150 Kata';
    var limit5 = 150
    // if (quill.getLength(text.split(/\s+/)) > limit) {
    //   quill.deleteText(limit, quill.getLength(text.split(/\s+/)));
    // alert('sudah melebihi batas kata')
    // }
    if ((text.split(/\s+/).length - 1) > limit5) {
      // quill.deleteText(limit, text.split(/\s+/).length);
      document.getElementById('counter7').style.color = 'red';
      // alert('sudah melebihi batas kata')
    }
  });
});

quill7 = new Quill('#editor7', {
  placeholder: "Kesimpulan dengan adanya budaya kerja",
  theme: 'snow',
  modules: {
    toolbar: {
      container: container
    },
    counter: {
      container: '#counter7'
    }
  }
});


quill7.on('text-change', function (delta, oldDelta, source) {
  document.querySelector('input[name=kesimpulan]').value = quill7.root.innerHTML;
});
