import { __ } from '@wordpress/i18n';
import { PlainText, useBlockProps } from '@wordpress/block-editor';
import './editor.scss';

export default function Edit( { attributes, setAttributes } ) {
	return (
		<div { ...useBlockProps() }>
			<PlainText
				keepplaceholderonfocus='true'
				placeholder={__('Title')}
				value={attributes?.title}
				onChange={(newTitle) => {
					setAttributes({ title: newTitle })
				}}
			/>
		</div>
	);
}
