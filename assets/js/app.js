// nav
function openNav() {
  document.getElementById("myNav").style.width = "30%";
};

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
};


// -------------------------------
// move card on mouseover
$(function () {
  var card = $(".parentMover");
  card.on('mousemove', function (e) {
    var x = e.clientX - $(this).offset().left + $(window).scrollLeft();
    var y = e.clientY - $(this).offset().top + $(window).scrollTop();

    //map is function
    var rY = map(x, 0, $(this).width(), -20, 20);
    var rX = map(y, 0, $(this).height(), -20, 20);

    $(this).children(".childCard").css("transform", "rotateY(" + rY + "deg)" + " " + "rotateX(" + -rX + "deg)");
  });

  function map(x, in_min, in_max, out_min, out_max) {
    return (x - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
  }
});

// -----------------------
// form
function displayquestion(a) {
  $(".questionholder").stop().hide();
  $("#question" + a).stop().show();
};

function addHyphen(elem, e) {
  var input = document.getElementById(elem.id);

  input.addEventListener("keyup", function (e) {
    if (e.key === "Backspace" || e.key === "Delete") return;
    if (input.value.length === 5) {
      input.value = input.value + "-";
    }
    if (input.value.length === 13) {
      input.value = input.value + "-";
    }
    if (input.value.length === 16) {
      input.value = input.value + "-";
    }
  });
};

function submitVote() {

  $('#vote-form').submit(function (e) {
    e.preventDefault();

    var name = $('form[id="vote-form"] #name').val().trim();
    var cnic = $('form[id="vote-form"] #cnic').val().trim();
    var location = $('form[id="vote-form"] #location').val().trim();
    var party = $('form[id="vote-form"] #party').val().trim();

    if (name && cnic && location && party) {
      $.ajax({
        type: "post",
        url: "vote.php",
        data: new FormData(this),
        processData: false, //add this
        contentType: false, //and this
        beforeSend: function () {
          $('.res').show();
        },
        success: function (response) {
          if (response.includes('0')) {
            showAlert('error', response.replace('0', ''));
            $('.res').hide();
          }
          else {
            showAlert('success', response);
            $('.res').hide();
          }
        }
      });

    } else {
      showAlert('error', 'Please Fill All Fields');
      $('.res').hide();
    }

  })
};

function addParty() {

  $('#add-form').submit(function (e) {
    e.preventDefault();

    var flag = $('form[id="add-form"] #flag').prop('files')[0];
    var symbol = $('form[id="add-form"] #symbol').prop('files')[0];
    var name = $('form[id="add-form"] #name').val().trim();
    var leader = $('form[id="add-form"] #leader').val().trim();

    var form_data = new FormData();
    form_data.append('flag', flag);
    form_data.append('symbol', symbol);
    form_data.append('name', name);
    form_data.append('leader', leader);

    if (!flag || !symbol || !name || !leader) {

      showAlert('error', 'please fill all fields');

    } else {

      $.ajax({
        type: "post",
        url: "party.php",
        data: form_data,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function () {
          $('.res').show();
        },
        success: function (response) {
          if (response.includes('0')) {
            showAlert('error', response.replace('0', ''));
            $('.res').hide();
          } else {
            showAlert('success', response);
            $('.res').hide();
          }

        }
      });

    }

  })
};

// ------------------
// alerts
const hideAlert = () => {
  const el = document.querySelector('.alert');
  if (el)
    el.parentElement.removeChild(el);
};

// type is either 'success' or 'error'
const showAlert = (type, msg, time = 3) => {
  hideAlert();
  const markup = `<div class="alert alert--${type}">${msg}</div>`;
  //add alert at top of the body
  document.querySelector('body').insertAdjacentHTML('afterbegin', markup);
  window.setTimeout(hideAlert, time * 1000);  //multiply user sec with 1000 to conv to millisecs
};

// ---------------------
// page load
function loadPage(url) {
  $(".page-load").load(url);
};


// --------------------
!function () {

  const e = document,
    t = e.documentElement,
    n = e.body,
    i = e.getElementById("lights-toggle"),
    s = window.sr = ScrollReveal();

  function a() {
    let e = i.parentNode.querySelector(".label-text");
    i.checked ? (n.classList.remove("lights-off"),
      e && (e.innerHTML = "dark")) : (n.classList.add("lights-off"),
        e && (e.innerHTML = "light"))
  }

  t.classList.remove("no-js"),
    t.classList.add("js"),
    window.addEventListener("load", function () {
      n.classList.add("is-loaded")
    }),

    n.classList.contains("has-animations") && window.addEventListener("load", function () {
      s.reveal(".feature", {
        duration: 600,
        distance: "20px",
        easing: "cubic-bezier(0.215, 0.61, 0.355, 1)",
        origin: "right",
        viewFactor: .2
      })
    }),

    i && (window.addEventListener("load", a),
      i.addEventListener("change", a))
}();