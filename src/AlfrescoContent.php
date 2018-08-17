<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 12:33
 */

namespace AlfPHPApi;


class AlfrescoContent
{
    /**
     * @var EcmAuth $ecmAuth
     */
    public $ecmAuth;

    /**
     * @var EcmClient $ecmClient
     */
    public $ecmClient;

    /**
     * AlfrescoContent constructor.
     *
     * @param EcmAuth   $ecmAuth
     * @param EcmClient $ecmClient
     */
    public function __construct(EcmAuth $ecmAuth, EcmClient $ecmClient)
    {
        $this->ecmAuth = $ecmAuth;
        $this->ecmClient = $ecmClient;
    }

    public function getDocumentThumbnailUrl(string $nodeId, bool $attachment = false, string $ticket = null) {
        return $this->ecmClient->basePath . '/nodes/' . $nodeId . '/renditions/doclib/content' .
            '?attachment=' . ($attachment?'true':'false') .
            '&alf_ticket=' . (!empty($ticket)?$ticket:$this->ecmAuth->getTicket());
    }

    public function getDocumentreviewUrl(string $nodeId, bool $attachment = false, string $ticket = null) {
        return $this->ecmClient->basePath . '/nodes/' . $nodeId . '/renditions/imgpreview/content' .
            '?attachment=' . ($attachment?'true':'false') .
            '&alf_ticket=' . (!empty($ticket)?$ticket:$this->ecmAuth->getTicket());
    }

    public function getContentUrl(string $nodeId, bool $attachment = false, string $ticket = null) {
        return $this->ecmClient->basePath . '/nodes/' . $nodeId . '/content' .
            '?attachment=' . ($attachment?'true':'false') .
            '&alf_ticket=' . (!empty($ticket)?$ticket:$this->ecmAuth->getTicket());
    }

    public function getRenditionUrl(string $nodeId, string $encoding, bool $attachment = false, string $ticket = null) {
        return $this->ecmClient->basePath . '/nodes/' . $nodeId . '/renditions/' . $encoding . '/content' .
            '?attachment=' . ($attachment?'true':'false') .
            '&alf_ticket=' . (!empty($ticket)?$ticket:$this->ecmAuth->getTicket());
    }

    public function getSharedLinkContentUrl(string $linkId, bool $attachment = false) {
        return $this->ecmClient->basePath . '/shared-links/' . $linkId . '/content' .
            '?attachment=' . ($attachment?'true':'false');
    }

    public function getSharedLinkRenditionUrl(string $sharedId, string $renditionId, bool $attachment = false) {
        return $this->ecmClient->basePath . '/shared-links/' . $sharedId . '/renditions/' . $renditionId . '/content' .
            '?attachment=' . ($attachment?'true':'false');
    }
}