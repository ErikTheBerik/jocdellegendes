LoadComponents();

function LoadComponents()
{
	AFRAME.registerComponent('clickable',
	{
  		init: function ()
  		{
  			this.el.classList.add('clickable');
  		},

  		update: function ()
  		{
		    var data = this.data;  // Component property values.
		    var el = this.el;  // Reference to the component's entity.

		    el.addEventListener('mouseenter', function ()
      		{
	        	el.object3D.scale.set(1.2, 1.2, 1.2);
	      	});

	      	el.addEventListener('mouseleave', function ()
      		{
	        	el.object3D.scale.set(1, 1, 1);
	      	});
	  	}
	});

	AFRAME.registerComponent('mosca',
	{
	 	schema:
	 	{
			path: {type: 'string', default: './assets/mosca.png'}
  		},
  		init: function ()
  		{
  			this.data.path = this.el.getAttribute('src');
  			this.el.setAttribute('src', './assets/mosca.png')
  		},

  		update: function ()
  		{
		    var data = this.data;  // Component property values.
		    var el = this.el;  // Reference to the component's entity.

		    el.addEventListener('click', function ()
      		{
      			el.setAttribute('src', data.path)
      			el.object3D.scale.set(5, 5, 5);
	      	});

	      	el.addEventListener('mouseleave', function ()
      		{
	        	el.setAttribute('src', './assets/mosca.png')
	      	});
	  	}
	});
}

