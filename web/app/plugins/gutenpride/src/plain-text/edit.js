import { __ } from '@wordpress/i18n';
import { PlainText, useBlockProps } from '@wordpress/block-editor';
import './editor.scss';

export default function Edit( props ) {
	const { attributes, setAttributes } = props;
	return(
		<div { ...useBlockProps() }>
			<PlainText
				className={"block-editor-plain-text-title"}
				placeholder={__('Title')}
				value={attributes?.title}
				onChange={(title) => {
					setAttributes({ title })
				}}
			/>
			<PlainText
				className={"block-editor-plain-text-subtitle"}
				placeholder={__('Sous-titre')}
				value={attributes?.subtitle}
				onChange={(subtitle) => {
					setAttributes({ subtitle })
				}}
			/>
		</div>
	);
}
