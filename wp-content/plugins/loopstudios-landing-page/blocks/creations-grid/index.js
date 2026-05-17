(function (wp) {
	var registerBlockType = wp.blocks.registerBlockType;
	var createElement = wp.element.createElement;
	var useState = wp.element.useState;
	var PanelBody = wp.components.PanelBody;
	var TextControl = wp.components.TextControl;
	var Button = wp.components.Button;
	var __ = wp.i18n.__;
	var InspectorControls = wp.blockEditor.InspectorControls;
	var MediaUpload = wp.blockEditor.MediaUpload;
	var useBlockProps = wp.blockEditor.useBlockProps;

	var DEFAULT_ITEMS = [
		{ title: 'Deep earth', mobileImageUrl: '', desktopImageUrl: '' },
		{ title: 'Night arcade', mobileImageUrl: '', desktopImageUrl: '' },
		{ title: 'Soccer team VR', mobileImageUrl: '', desktopImageUrl: '' },
		{ title: 'The grid', mobileImageUrl: '', desktopImageUrl: '' },
		{ title: 'From up above VR', mobileImageUrl: '', desktopImageUrl: '' },
		{ title: 'Pocket borealis', mobileImageUrl: '', desktopImageUrl: '' },
		{ title: 'The curiosity', mobileImageUrl: '', desktopImageUrl: '' },
		{ title: 'Make it fisheye', mobileImageUrl: '', desktopImageUrl: '' },
	];

	registerBlockType('loopstudios/creations-grid', {
		apiVersion: 3,
		title: __('Creations Grid', 'loopstudios-landing-page'),
		icon: 'grid-view',
		category: 'design',
		attributes: {
			items: {
				type: 'array',
				default: DEFAULT_ITEMS,
			},
		},
		edit: function (props) {
			var attributes = props.attributes;
			var setAttributes = props.setAttributes;
			var items = attributes.items && attributes.items.length
				? attributes.items
				: DEFAULT_ITEMS;

			function updateItem(index, key, value) {
				var newItems = items.map(function (item, i) {
					if (i === index) {
						return Object.assign({}, item, (function () {
							var obj = {};
							obj[key] = value;
							return obj;
						})());
					}
					return item;
				});
				setAttributes({ items: newItems });
			}

			var blockProps = useBlockProps();

			return createElement('div', blockProps,
				createElement(InspectorControls, null,
					items.map(function (item, index) {
						return createElement(PanelBody,
							{
								key: index,
								title: item.title + ' (#' + (index + 1) + ')',
								initialOpen: false,
							},
							createElement(TextControl, {
								label: __('Title', 'loopstudios-landing-page'),
								value: item.title,
								onChange: function (value) {
									updateItem(index, 'title', value);
								},
							}),
							createElement('p', null,
								createElement(MediaUpload, {
									onSelect: function (media) {
										updateItem(index, 'mobileImageUrl', media.url);
									},
									type: 'image',
									render: function (obj) {
										return createElement(Button, {
											isSecondary: true,
											onClick: obj.open,
										}, item.mobileImageUrl
											? __('Edit Mobile Image', 'loopstudios-landing-page')
											: __('Select Mobile Image', 'loopstudios-landing-page'));
									},
								})
							),
							item.mobileImageUrl
								? createElement('img', {
									src: item.mobileImageUrl,
									alt: item.title,
									style: { maxWidth: '100%', height: 'auto', marginBottom: '8px', display: 'block' },
								})
								: null,
							createElement('p', null,
								createElement(MediaUpload, {
									onSelect: function (media) {
										updateItem(index, 'desktopImageUrl', media.url);
									},
									type: 'image',
									render: function (obj) {
										return createElement(Button, {
											isSecondary: true,
											onClick: obj.open,
										}, item.desktopImageUrl
											? __('Edit Desktop Image', 'loopstudios-landing-page')
											: __('Select Desktop Image', 'loopstudios-landing-page'));
									},
								})
							),
							item.desktopImageUrl
								? createElement('img', {
									src: item.desktopImageUrl,
									alt: item.title,
									style: { maxWidth: '100%', height: 'auto', marginBottom: '8px', display: 'block' },
								})
								: null
						);
					})
				),
				createElement('div', { className: 'creations-preview' },
					createElement('h3', { style: { fontFamily: 'Josefin Sans, sans-serif', textTransform: 'uppercase', fontWeight: 300 } },
						__('Our Creations', 'loopstudios-landing-page')
					),
					createElement('div', {
						style: {
							display: 'grid',
							gridTemplateColumns: 'repeat(4, 1fr)',
							gap: '16px',
						},
					},
						items.map(function (item, index) {
							return createElement('div', {
								key: index,
								style: {
									position: 'relative',
									overflow: 'hidden',
									aspectRatio: '1 / 1.2',
									backgroundColor: '#000',
									color: '#fff',
									display: 'flex',
									alignItems: 'flex-end',
									padding: '16px',
								},
							},
								item.mobileImageUrl
									? createElement('img', {
										src: item.mobileImageUrl,
										alt: item.title,
										style: { position: 'absolute', inset: 0, width: '100%', height: '100%', objectFit: 'cover' },
									})
									: null,
								createElement('span', {
									style: {
										position: 'relative',
										zIndex: 1,
										fontFamily: 'Josefin Sans, sans-serif',
										fontSize: '24px',
										fontWeight: 300,
										textTransform: 'uppercase',
									},
								}, item.title)
							);
						})
					)
				)
			);
		},
		save: function () {
			return null;
		},
	});
})(window.wp);
