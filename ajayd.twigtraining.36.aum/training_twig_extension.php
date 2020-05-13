<?php
class Training_Twig_Extension extends \Twig\Extension\AbstractExtension {

	public function getFunctions() {
		return [
			new \Twig\TwigFunction('lipsum', function ($string) {
					return strtolower($string);
				}),
		];
	}
	public function getFilters() {
		return [
			new \Twig\TwigFilter('rot13_with_extenstion', 'str_rot13'),
		];
	}

}
?>