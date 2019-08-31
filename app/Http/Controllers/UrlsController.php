<?php

namespace App\Http\Controllers;

use App\Url;
use App\Email;
use App\Http\Resources\UrlResource;

class UrlsController extends Controller
{
	public function index()
	{
		self::getUrl();
	}

	public function getUrl()
	{
		
		$urls = self::urlsNaoVisitadas();
		
		foreach($urls as $url):
			$urlCompleta = $url->url;
			$urlId = $url->id;
		endforeach;


		if (isset($urlCompleta)):
			self::rastreiaUrls($urlCompleta);
			
			self::rastreiaEmailsDeUrl($urlCompleta);

			Url::where('id', $urlId)->update(['visited' => 'yes']);
		endif;
	}

	public function totalUrlsColetadas()
	{
		$urls = Url::get();
		return count($urls);
	}

	public function totalUrlsVisitadas()
	{
		$urls = Url::query()->where('visited','yes')->select(['id'])->get();
		return count($urls);
	}

	public function urlsNaoVisitadas()
	{
		$urls = Url::query()->where('visited','no')->limit(1)->select(['id', 'url', 'visited'])->get();
		return $urls;
	}

	public function rastreiaUrls($urlCompleta)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $urlCompleta);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$data = curl_exec($ch);
		curl_close($ch);
		if(preg_match_all('/<a href=["\']?((?:.(?!["\']?\s+(?:\S+)=|[>"\']))+.)["\']?>/i', $data, $urlsConteudo))
		{
			foreach ($urlsConteudo[1] as $url):
				if(count(URL::query()->where('url', $url)->select(['url'])->get()) == 0)
					URL::create(['url' => $url]);
			endforeach;
		}
	}

	public function rastreiaEmailsDeUrl($urlCompleta)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $urlCompleta);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$data = curl_exec($ch);
		curl_close($ch);
		if(preg_match_all('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $data, $mailsArray))
		{
			foreach($mailsArray[0] as $mail):
				if (count(Email::query()->where('email', $mail)->select(['email'])->get()) == 0)
					Email::create(['email' => $mail]);
			endforeach;
		}
	}
}