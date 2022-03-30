import { __ } from '@wordpress/i18n';
import { RichText, useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function save( { attributes } ) {
	const blockProps = useBlockProps.save();
	return (
		<div style={`--bg-url: url(${attributes?.imageUrl})`}>
			<InnerBlocks.Content />
			{attributes?.imageUrl &&
				<img src={attributes?.imageUrl} alt="" />
			}
		</div>
	);
}
