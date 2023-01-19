<?php

namespace App\Services;

use App\Clients\RestClient;
use App\Clients\RestClientException;
use App\Models\Backlink;
use Illuminate\Support\Benchmark;

/**
 * Class BacklinkService
 * @package App\Services
 * @author Vladyslav Hychka <vlad.hychka@gmail.com>
 */
class BacklinkService
{
    /**
     * @param string $target
     * @return array
     */
    public function getResponseFromAPI(string $target): array
    {
        $api_url = 'https://api.dataforseo.com/';
//      Base64 Token  config('services.dfs_token') . doesnt work by Token

        $client = new RestClient($api_url, null, 'vlad.hychka@gmail.com', 'e3e3731789bf4877');
        $post_array = [
            'target' => $target,
            'mode'   => 'as_is',
        ];

        try {
            $result = $client->post('/v3/backlinks/backlinks/live', $post_array);
        } catch (RestClientException $e) {
            echo "n";
            print "HTTP code: {$e->getHttpCode()}n";
            print "Error code: {$e->getCode()}n";
            print "Message: {$e->getMessage()}n";
            print  $e->getTraceAsString();
            echo "n";
        }

        $result = '{
  "version": "0.1.20220627",
  "status_code": 20000,
  "status_message": "Ok.",
  "time": "4.6851 sec.",
  "cost": 0.02015,
  "tasks_count": 1,
  "tasks_error": 0,
  "tasks": [
    {
      "id": "07151321-1535-0269-0000-96e2138fffb9",
      "status_code": 20000,
      "status_message": "Ok.",
      "time": "4.6239 sec.",
      "cost": 0.02015,
      "result_count": 1,
      "path": [
        "v3",
        "backlinks",
        "backlinks",
        "live"
      ],
      "data": {
        "api": "backlinks",
        "function": "backlinks",
        "target": "forbes.com",
        "mode": "as_is",
        "filters": [
          "dofollow",
          "=",
          true
        ],
        "limit": 5
      },
      "result": [
        {
          "target": "forbes.com",
          "mode": "as_is",
          "total_count": 59535207,
          "items_count": 5,
          "items": [
            {
              "type": "backlink",
              "domain_from": "www.opencart.com",
              "url_from": "https://www.opencart.com/",
              "url_from_https": true,
              "domain_to": "www.forbes.com",
              "url_to": "http://www.forbes.com/sites/brentgleeson/2014/09/05/3-steps-to-launch-your-first-ecommerce-website/",
              "url_to_https": false,
              "tld_from": "com",
              "is_new": false,
              "is_lost": false,
              "backlink_spam_score": 0,
              "rank": 866,
              "page_from_rank": 1000,
              "domain_from_rank": 713,
              "domain_from_platform_type": [
                "unknown"
              ],
              "domain_from_is_ip": false,
              "domain_from_ip": "104.20.14.19",
              "page_from_external_links": 20,
              "page_from_internal_links": 17,
              "page_from_size": 19610,
              "page_from_encoding": "utf-8",
              "page_from_language": "en",
              "page_from_title": "OpenCart - Open Source Shopping Cart Solution",
              "page_from_status_code": 200,
              "first_seen": "2019-01-21 18:17:01 +00:00",
              "prev_seen": "2022-07-03 09:39:57 +00:00",
              "last_seen": "2022-07-13 10:39:29 +00:00",
              "item_type": "anchor",
              "attributes": null,
              "dofollow": true,
              "original": false,
              "alt": "Forbes",
              "anchor": null,
              "text_pre": null,
              "text_post": null,
              "semantic_location": null,
              "links_count": 1,
              "group_count": 0,
              "is_broken": false,
              "url_to_status_code": 301,
              "url_to_spam_score": 0,
              "url_to_redirect_target": "https://www.forbes.com/sites/brentgleeson/2014/09/05/3-steps-to-launch-your-first-ecommerce-website/"
            },
            {
              "type": "backlink",
              "domain_from": "bit.ly",
              "url_from": "http://bit.ly/2Y2rVX8",
              "url_from_https": false,
              "domain_to": "www.forbes.com",
              "url_to": "https://www.forbes.com/sites/cryptoconfidential",
              "url_to_https": true,
              "tld_from": "ly",
              "is_new": false,
              "is_lost": false,
              "backlink_spam_score": 0,
              "rank": 824,
              "page_from_rank": 836,
              "domain_from_rank": 828,
              "domain_from_platform_type": null,
              "domain_from_is_ip": false,
              "domain_from_ip": "67.199.248.11",
              "page_from_external_links": 0,
              "page_from_internal_links": 0,
              "page_from_size": 134,
              "page_from_encoding": null,
              "page_from_language": null,
              "page_from_title": null,
              "page_from_status_code": 301,
              "first_seen": "2019-08-24 09:17:54 +00:00",
              "prev_seen": "2022-07-01 20:13:02 +00:00",
              "last_seen": "2022-07-12 18:35:29 +00:00",
              "item_type": "redirect",
              "attributes": null,
              "dofollow": true,
              "original": false,
              "alt": null,
              "anchor": null,
              "text_pre": null,
              "text_post": null,
              "semantic_location": null,
              "links_count": 1,
              "group_count": 0,
              "is_broken": true,
              "url_to_status_code": 403,
              "url_to_spam_score": 0,
              "url_to_redirect_target": null
            },
            {
              "type": "backlink",
              "domain_from": "bit.ly",
              "url_from": "https://bit.ly/2Rkd9oN",
              "url_from_https": true,
              "domain_to": "cloud.read.forbes.com",
              "url_to": "https://cloud.read.forbes.com/Investing-Digest-Sign-Up?k=FDC_INV_Opt",
              "url_to_https": true,
              "tld_from": "ly",
              "is_new": false,
              "is_lost": false,
              "backlink_spam_score": 0,
              "rank": 824,
              "page_from_rank": 835,
              "domain_from_rank": 828,
              "domain_from_platform_type": null,
              "domain_from_is_ip": false,
              "domain_from_ip": "67.199.248.10",
              "page_from_external_links": 0,
              "page_from_internal_links": 0,
              "page_from_size": 155,
              "page_from_encoding": null,
              "page_from_language": null,
              "page_from_title": null,
              "page_from_status_code": 301,
              "first_seen": "2020-10-30 22:42:03 +00:00",
              "prev_seen": "2022-07-01 20:14:26 +00:00",
              "last_seen": "2022-07-12 18:34:57 +00:00",
              "item_type": "redirect",
              "attributes": null,
              "dofollow": true,
              "original": false,
              "alt": null,
              "anchor": null,
              "text_pre": null,
              "text_post": null,
              "semantic_location": null,
              "links_count": 1,
              "group_count": 0,
              "is_broken": false,
              "url_to_status_code": 200,
              "url_to_spam_score": 45,
              "url_to_redirect_target": null
            },
            {
              "type": "backlink",
              "domain_from": "thishosting.rocks",
              "url_from": "https://thishosting.rocks/",
              "url_from_https": true,
              "domain_to": "www.forbes.com",
              "url_to": "https://www.forbes.com/sites/theopriestley/2015/09/22/why-every-human-will-have-an-ip-address-by-2025/?sh=7501098c705c",
              "url_to_https": true,
              "tld_from": "rocks",
              "is_new": true,
              "is_lost": false,
              "backlink_spam_score": 5,
              "rank": 817,
              "page_from_rank": 907,
              "domain_from_rank": 643,
              "domain_from_platform_type": [
                "organization"
              ],
              "domain_from_is_ip": false,
              "domain_from_ip": "107.161.26.61",
              "page_from_external_links": 6,
              "page_from_internal_links": 46,
              "page_from_size": 129845,
              "page_from_encoding": "utf-8",
              "page_from_language": "en",
              "page_from_title": "ThisHosting.Rocks – Linux, Web Hosting, and Everything Else in Between",
              "page_from_status_code": 200,
              "first_seen": "2022-07-13 10:56:31 +00:00",
              "prev_seen": null,
              "last_seen": "2022-07-13 10:56:31 +00:00",
              "item_type": "anchor",
              "attributes": null,
              "dofollow": true,
              "original": true,
              "alt": null,
              "anchor": "IP address",
              "text_pre": "VPN software encrypts your data and transfers it over a secure connection to an external server. The information is then sent over the internet. The visible IP address shifts along the voyage. This implies that the",
              "text_post": "you see online isn’t the same as the one you have at home. As a result, your online activity is protected and anonymous.",
              "semantic_location": "section",
              "links_count": 1,
              "group_count": 0,
              "is_broken": false,
              "url_to_status_code": null,
              "url_to_spam_score": null,
              "url_to_redirect_target": null
            },
            {
              "type": "backlink",
              "domain_from": "www.forbesmedia.com",
              "url_from": "http://www.forbesmedia.com/",
              "url_from_https": false,
              "domain_to": "www.forbes.com",
              "url_to": "https://www.forbes.com/forbes-media/",
              "url_to_https": true,
              "tld_from": "com",
              "is_new": false,
              "is_lost": false,
              "backlink_spam_score": 0,
              "rank": 709,
              "page_from_rank": 720,
              "domain_from_rank": 538,
              "domain_from_platform_type": null,
              "domain_from_is_ip": false,
              "domain_from_ip": "151.101.0.204",
              "page_from_external_links": 0,
              "page_from_internal_links": 0,
              "page_from_size": 0,
              "page_from_encoding": null,
              "page_from_language": null,
              "page_from_title": null,
              "page_from_status_code": 301,
              "first_seen": "2021-12-17 16:30:59 +00:00",
              "prev_seen": "2022-06-28 23:17:47 +00:00",
              "last_seen": "2022-07-09 02:31:15 +00:00",
              "item_type": "redirect",
              "attributes": null,
              "dofollow": true,
              "original": false,
              "alt": null,
              "anchor": null,
              "text_pre": null,
              "text_post": null,
              "semantic_location": null,
              "links_count": 1,
              "group_count": 0,
              "is_broken": false,
              "url_to_status_code": 301,
              "url_to_spam_score": 0,
              "url_to_redirect_target": "https://www.forbes.com/connect/"
            }
          ],
          "search_after_token": "eyJWZXJzaW9uIjoxLCJTZWFyY2hBZnRlclZhbHVlcyI6eyJyYW5rIjo3MDksImxhc3Rfc2VlbiI6IjIwMjItMDctMDlUMDI6MzE6MTUrMDA6MDAifSwiVG9rZW5SZWFsT2Zmc2V0Ijo1fQ=="
        }
      ]
    }
  ]
}';
        $res = json_decode($result, true);

        return $res;
    }

    /**
     * @param array $dataSeo
     * @return bool
     */
    public function saveToDb(array $dataSeo): bool
    {
        $items = $dataSeo['tasks'][0]['result'][0]['items'];

        foreach ($items as $item) {
            Backlink::create([
                'target'   => 'http://forbes.com',
                'url_from' => $item['url_from'],
                'url_to'   => $item['url_to'],
                'rank'     => $item['rank']
            ]);
        }

        return true;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return Backlink::orderBy('rank', 'desc')->get();
    }
}