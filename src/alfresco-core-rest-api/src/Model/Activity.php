<?php
/**
 * Nom du fichier : Activity.php
 * Projet : alfresco-php-api
 * Date : 16/06/2018
 */

namespace AlfPHPApi\AlfrescoCoreRestApi\Model;


class Activity extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $postPersonId;

    /**
     * @var string
     */
    public $siteId;

    /**
     * @var \DateTime
     */
    public $postedAt;

    /**
     * @var string
     */
    public $feedPersonId;

    /**
     * @var ActivityActivitySummary
     */
    public $activitySummary;

    /**
     * @var string
     */
    public $activityType;

    const COMMENTS_COMMENT_CREATED = "org.alfresco.comments.comment-created";

    const COMMENTS_COMMENT_UPDATED = "org.alfresco.comments.comment-updated";

    const COMMENTS_COMMENT_DELETED = "org.alfresco.comments.comment-deleted";

    const DOCUMENTLIBRARY_FILES_ADDED = "org.alfresco.documentlibrary.files-added";

    const DOCUMENTLIBRARY_FILES_UPDATED = "org.alfresco.documentlibrary.files-updated";

    const DOCUMENTLIBRARY_FILES_DELETED = "org.alfresco.documentlibrary.files-deleted";

    const DOCUMENTLIBRARY_FILE_ADDED = "org.alfresco.documentlibrary.file-added";

    const DOCUMENTLIBRARY_FILE_CREATED = "org.alfresco.documentlibrary.file-created";

    const DOCUMENTLIBRARY_FILE_DELETED = "org.alfresco.documentlibrary.file-deleted";

    const DOCUMENTLIBRARY_FILE_DOWNLOADED = "org.alfresco.documentlibrary.file-downloaded";

    const DOCUMENTLIBRARY_FILE_LIKED = "org.alfresco.documentlibrary.file-liked";

    const DOCUMENTLIBRARY_FILE_PREVIEWED = "org.alfresco.documentlibrary.file-previewed";

    const DOCUMENTLIBRARY_INLINE_EDIT = "org.alfresco.documentlibrary.inline-edit";

    const DOCUMENTLIBRARY_FOLDER_LIKED = "org.alfresco.documentlibrary.folder-liked";

    const SITE_USER_JOINED = "org.alfresco.site.user-joined";

    const SITE_USER_LEFT = "org.alfresco.site.user-left";

    const SITE_USER_ROLE_CHANGED = "org.alfresco.site.user-role-changed";

    const SITE_GROUP_ADDED = "org.alfresco.site.group-added";

    const SITE_GROUP_REMOVED = "org.alfresco.site.group-removed";

    const SITE_GROUP_ROLE_CHANGED = "org.alfresco.site.group-role-changed";

    const DISCUSSIONS_REPLY_CREATED = "org.alfresco.discussions.reply-created";

    const SUBSCRIPTIONS_FOLLOWED = "org.alfresco.subscriptions.followed";

    const SUBSCRIPTIONS_SUBSCRIBED = "org.alfresco.subscriptions.subscribed";

    protected static $constructProperties = [
        'postPersonId' => 'String',
        'id' => 'Integer',
        'siteId' => 'String',
        'postedAt' => 'Date',
        'feedPersonId' => 'String',
        'activitySummary' => ActivityActivitySummary::class,
        'activityType' => 'String'
    ];

    /**
     * Activity constructor.
     * @param string $postPersonId
     * @param int $id
     * @param string $feedPersonId
     * @param string $activityType
     */
    public function __construct(string $postPersonId = null, int $id = null, string $feedPersonId = null, string $activityType = null)
    {
        $this->id = $id;
        $this->postPersonId = $postPersonId;
        $this->feedPersonId = $feedPersonId;
        $this->activityType = $activityType;
    }
}