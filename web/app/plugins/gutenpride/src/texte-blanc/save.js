import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

export default function save( { attributes } ) {
	return (
		<section { ...useBlockProps.save() } className="tel">
			<div>
				<h1>{attributes?.title}</h1>
				<span>{attributes?.subtitle}</span>
				<button className="btn butel">DOWNLOAD OUR APPS</button>
			</div>
		</section>
	);
}
