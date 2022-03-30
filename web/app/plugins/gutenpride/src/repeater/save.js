import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

export default function save( { attributes } ) {
	return (
		<div { ...useBlockProps.save() }>
			<h1>{attributes?.title}</h1>
		</div>
	);
}
