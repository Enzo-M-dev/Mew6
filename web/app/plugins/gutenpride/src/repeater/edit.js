import { __ } from '@wordpress/i18n';
import { PlainText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import './editor.scss';

export default function Edit( { attributes: { content = [] }, setAttributes } ) {
	return (
		<>
			{content.map((value, index) => {
				return (
					<>
						<PlainText
							placeholder={__('Demo')}
							value={value.title}
							onChange={(title) => {
								const newContent = [...content]
								newContent[index].title = title
								setAttributes({ content: newContent })
							}}
						/>
						<Button
							onClick={() => {
								const newContent = [
									...content.slice(0, index),
									...content.slice(index + 1)
								]
								setAttributes({ content: newContent })
							}}
						>{__('Supprimer')}
						</Button>
					</>
				)
			})}
			<Button
				onClick={() => {
					const newContent = [...content, {}]
					setAttributes({ content: newContent })
				}}
			>{__('Ajouter')}
			</Button>
		</>
	);
}
