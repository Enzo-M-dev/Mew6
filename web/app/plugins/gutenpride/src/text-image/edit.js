import { __ } from '@wordpress/i18n';
import {
	MediaUpload, MediaPlaceholder, MediaUploadCheck, InspectorControls,
	useBlockProps, RichText, URLInputButton, SelectControl  } from '@wordpress/block-editor';
import { BaseControl, Button } from '@wordpress/components';
import './editor.scss';

const ALLOWED_MEDIA_TYPES = ['image'];

export default function Edit( props ) {
	const { attributes, setAttributes } = props;
	const blockProps = useBlockProps();
	return (
		<div>
			<URLInputButton
				url={attributes?.link}
				onChange={ (link) => { setAttributes({link}) } }
			/>
			<RichText
			  { ...blockProps }
				tagName="p"
				value={ attributes?.text }
				placeholder={ __( 'Description du document à télécharger') }
				onChange={ text => setAttributes( { text } ) }
			/>
			{attributes?.imageUrl ? (
				<img src={attributes?.imageUrl} alt="" />
 			) : (
				<MediaPlaceholder
					onSelect={(media) => setAttributes({ imageUrl: media.url, imageId: media.id })}
					allowedTypes={['image']}
					multiple={false}
					labels={{ title: __('The Image') }}
				/>
			)}
			<InspectorControls>
				<BaseControl>
				<MediaPlaceholder
					onSelect={(media) => setAttributes({ imageUrl: media.url, imageId: media.id })}
					allowedTypes={['image']}
					multiple={false}
					labels={{ title: __('The Image') }}
				/>
				<SelectControl
            		label="classtxt"
					value={ attributes?.classtxt }
            		options={ [
               			{ label: 'BG', value: 'homee' },
                		{ label: 'TEL', value: 'tel' },
                		{ label: 'GIFT', value: 'abo' },
            			] }
           			 onChange={ ( classtxt ) => setAttributes( classtxt ) }
        		/>
					<MediaUploadCheck>
						<MediaUpload
							onSelect={(media) => setAttributes({ imageUrl: media.url, imageId: media.id })}
							allowedTypes={ ALLOWED_MEDIA_TYPES }
							value={ attributes?.imageId }
							render={ ( { open } ) => (
								<Button onClick={ open }>{__('Replace the image')}</Button>
							) }
						/>
					</MediaUploadCheck>
				</BaseControl>
			</InspectorControls>
		</div>
	);
}
