

// 
// Progress Bar
// 


var lineBar = new ProgressBar.Line("#line-container", {
  strokeWidth: 4,
  trailWidth: 0.5,
  svgStyle: {
  	display: 'block',
  	width: '50%',
  	margin: '0 auto'
  },
  easing: 'easeInOut',
  from: { color: "#bac5ff"	},
  to: { color: "#798ef7" },
  text: {
    value: '0',
    className: 'progress-text',
    style: {
      color: 'black',
      position: 'absolute',
      left: '49%',
      bottom: '2px',
      padding: 0,
      margin: 0,
      transform: null
    }
  },
  step: (state, shape) => {
    shape.path.setAttribute("stroke", state.color);
    shape.setText(Math.round(shape.value() * 100) + ' %');
  }
});

function check1() {
	document.querySelector('.check1').style.display = "block";
	document.querySelector('.check__name').innerHTML = 'Идет проверка кредитной истории';
	lineBar.set(0);
	lineBar.animate(1, {
		duration: 7000
	}, check2);
};

function check2() {
	document.querySelector('.check__name').innerHTML = 'Идет процесс регистрации';
	document.querySelector('.check2').style.display = "block";
	lineBar.set(0);
	lineBar.animate(1, {
		duration: 6000
	}, check3);
};

function check3() {
	document.querySelector('.check3').style.display = "block";
	document.querySelector('#checkBtn').style.display = "block";
};


lineBar.animate(1, {
		duration: 8000
}, check1);