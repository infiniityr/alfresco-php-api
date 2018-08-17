<?php
/**
 * Created by IntelliJ IDEA.
 * User: valentin
 * Date: 16/08/2018
 * Time: 22:27
 */

namespace AlfPHPApi\AlfrescoCoreRestApi;


use AlfPHPApi\AlfrescoCoreRestApi\Api\AssociationsApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\ChangesApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\ChildAssociationsApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\ClassesApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\CommentsApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\CustomModelApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\DownloadsApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\FavoritesApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\GroupsApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\NetworksApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\NodesApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\PeopleApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\QueriesApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\RatingsApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\RenditionsApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\SharedlinksApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\SiteApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\TagsApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\VersionsApi;
use AlfPHPApi\AlfrescoCoreRestApi\Api\WebscriptApi;
use AlfPHPApi\AlfrescoCoreRestApi\Model\AssocChildBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\AssocTargetBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\CommentBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\CopyBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\DownloadBodyCreate;
use AlfPHPApi\AlfrescoCoreRestApi\Model\EmailSharedLinkBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\FavoriteBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\FavoriteSiteBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\GroupBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\GroupMember;
use AlfPHPApi\AlfrescoCoreRestApi\Model\MoveBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\NodeBodyLock;
use AlfPHPApi\AlfrescoCoreRestApi\Model\PersonBodyCreate;
use AlfPHPApi\AlfrescoCoreRestApi\Model\RatingBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\RenditionBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SharedLinkBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteMemberBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteMemberRoleBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteMembershipBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\SiteMembershipBody1;
use AlfPHPApi\AlfrescoCoreRestApi\Model\TagBody;
use AlfPHPApi\AlfrescoCoreRestApi\Model\TagBody1;
use AlfPHPApi\BaseListApi;

/**
 * Class AlfrescoCoreRestApi
 * @package AlfPHPApi\AlfrescoCoreRestApi
 *
 * @property-read AssociationsApi $associationsApi
 * @property-read AssociationsApi $associations
 * @property-read ChangesApi $changesApi
 * @property-read ChangesApi $changes
 * @property-read ChildAssociationsApi $childAssociationsApi
 * @property-read ChildAssociationsApi $childAssociations
 * @property-read ClassesApi $classesApi
 * @property-read ClassesApi $classes
 * @property-read CommentsApi $commentsApi
 * @property-read CommentsApi $comments
 * @property-read CustomModelApi $customModelApi
 * @property-read CustomModelApi $customModel
 * @property-read DownloadsApi $downloadsApi
 * @property-read DownloadsApi $downloads
 * @property-read FavoritesApi $favoritesApi
 * @property-read FavoritesApi $favorites
 * @property-read GroupsApi $groupsApi
 * @property-read GroupsApi $groups
 * @property-read NetworksApi $networksApi
 * @property-read NetworksApi $networks
 * @property-read NodesApi $nodesApi
 * @property-read NodesApi $nodes
 * @property-read PeopleApi $peopleApi
 * @property-read PeopleApi $people
 * @property-read QueriesApi $queriesApi
 * @property-read QueriesApi $queries
 * @property-read RatingsApi $ratingsApi
 * @property-read RatingsApi $ratings
 * @property-read RenditionsApi $renditionsApi
 * @property-read RenditionsApi $renditions
 * @property-read SharedlinksApi $sharedlinksApi
 * @property-read SharedlinksApi $sharedlinks
 * @property-read SiteApi $siteApi
 * @property-read SiteApi $site
 * @property-read TagsApi $tagsApi
 * @property-read TagsApi $tags
 * @property-read VersionsApi $versionsApi
 * @property-read VersionsApi $versions
 * @property-read WebscriptApi $webScriptApi
 * @property-read WebscriptApi $webScript
 *
 * METHODS
 *    AssociationsApi
 * @method \GuzzleHttp\Promise\PromiseInterface addAssoc(string $sourceId, AssocTargetBody $assocTargetBody)
 * @method \GuzzleHttp\Promise\PromiseInterface listSourceNodeAssociations(string $targetId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface listTargetAssociations(string $sourceId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface removeAssoc(string $sourceId, string $targetId, array $opts = [])
 *    ChangesApi
 * /method \GuzzleHttp\Promise\PromiseInterface addAssoc(string $sourceId, AssocTargetBody $assocTargetBody)
 * @method \GuzzleHttp\Promise\PromiseInterface addNode(string $nodeId, NodeBody $nodeBody, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface addSecondaryChildAssoc(string $parentId, AssocChildBody $assocChildBody)
 * @method \GuzzleHttp\Promise\PromiseInterface addSharedLink(SharedLinkBody $sharedLinkBody, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface copyNode(string $nodeId, CopyBody $copyBody, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface createRendition(string $nodeId, RenditionBody $renditionBody)
 * @method \GuzzleHttp\Promise\PromiseInterface createSite(SiteBody $siteBody, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface deleteNode(string $nodeId, array $opts=[])
 * @method \GuzzleHttp\Promise\PromiseInterface deleteSharedLink(string $shareId)
 * @method \GuzzleHttp\Promise\PromiseInterface deleteSite(string $siteId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface emailSharedLink(string $sharedId, EmailSharedLinkBody $emailSharedLinkBody)
 * @method \GuzzleHttp\Promise\PromiseInterface findSharedLinks(array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getDeletedNode(string $nodeId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getDeletedNodes(array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getFileContent(string $nodeId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getNode(string $nodeId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getNodeChildren(string $nodeId, array $opts=[])
 * @method \GuzzleHttp\Promise\PromiseInterface getRendition(string $nodeId, string $renditionId)
 * @method \GuzzleHttp\Promise\PromiseInterface getRenditionContent(string $nodeId, string $renditionId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getRenditions(string $nodeId)
 * @method \GuzzleHttp\Promise\PromiseInterface getSharedLink(string $sharedId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getSharedLinkContent(string $sharedId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getSharedLinkRenditionContent(string $sharedId, string $renditionId, $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getSharedLinkRenditions(string $sharedId)
 * @method \GuzzleHttp\Promise\PromiseInterface listParents(string $childId, array $opts=[])
 * @method \GuzzleHttp\Promise\PromiseInterface listSecondaryChildAssociations(string $parentId, array $opts=[])
 * /method \GuzzleHttp\Promise\PromiseInterface listSourceNodeAssociations(string $targetId, array $opts=[])
 * /method \GuzzleHttp\Promise\PromiseInterface listTargetAssociations(string $sourceId, array $opts=[])
 * @method \GuzzleHttp\Promise\PromiseInterface liveSearchNodes(string $term, array $opts=[])
 * /method \GuzzleHttp\Promise\PromiseInterface removeAssoc(string $sourceId, string $targetId, array $opts=[])
 * @method \GuzzleHttp\Promise\PromiseInterface removeSecondaryChildAssoc(string $parentId, string $childId, array $opts=[])
 * @method \GuzzleHttp\Promise\PromiseInterface restoreNode(string $nodeId)
 * @method \GuzzleHttp\Promise\PromiseInterface updateFileContent(string $nodeId, string $contentBody, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface updateNode(string $nodeId, NodeBody $nodeBody, array $opts = [])
 *    ChildAssociationsApi
 * /method \GuzzleHttp\Promise\PromiseInterface addNode(string $nodeId, NodeBody $nodeBody, array $opts=[])
 * /method \GuzzleHttp\Promise\PromiseInterface addSecondaryChildAssoc(string $parentId, AssocChildBody $assocChildBody)
 * /method \GuzzleHttp\Promise\PromiseInterface deleteNode(string $nodeId, array $opts=[])
 * /method \GuzzleHttp\Promise\PromiseInterface getNodeChildren(string $nodeId, array $opts=[])
 * /method \GuzzleHttp\Promise\PromiseInterface listParents(string $childId, array $opts=[])
 * /method \GuzzleHttp\Promise\PromiseInterface listSecondaryChildAssociations(string $parentId, array $opts=[])
 * @method \GuzzleHttp\Promise\PromiseInterface moveNode(string $nodeId, MoveBody $moveBody, array $opts=[])
 * /method \GuzzleHttp\Promise\PromiseInterface removeSecondaryChildAssoc(string $parentId, string $childId, array $opts=[])
 *    ClassesApi
 * @method \GuzzleHttp\Promise\PromiseInterface getClass(string $className, array $opts=[])
 *    CommentsApi
 * @method \GuzzleHttp\Promise\PromiseInterface addComment(string $nodeId, CommentBody $commentBody, array $opts=[])
 * @method \GuzzleHttp\Promise\PromiseInterface getComments(string $nodeId, array $opts=[])
 * @method \GuzzleHttp\Promise\PromiseInterface removeComment(string $nodeId, string $commentId)
 * @method \GuzzleHttp\Promise\PromiseInterface updateComment(string $nodeId, string $commentId, CommentBody $commentBody, array $opts=[])
 *    CustomModelApi
 * @method \GuzzleHttp\Promise\PromiseInterface createCustomModel(string $status,string $description, string $name, string $namespaceUri, string $namespacePrefix)
 * @method \GuzzleHttp\Promise\PromiseInterface createCustomType(string $modelName, string $name, string $parentName, string $title, string $description)
 * @method \GuzzleHttp\Promise\PromiseInterface createCustomAspect(string $modelName, string $name, string $parentName, string $title, string $description)
 * @method \GuzzleHttp\Promise\PromiseInterface createCustomConstraint(string $modelName, string $name, string $type, $parameters)
 * @method \GuzzleHttp\Promise\PromiseInterface activateCustomModel(string $modelName)
 * @method \GuzzleHttp\Promise\PromiseInterface deactivateCustomModel(string $modelName)
 * @method \GuzzleHttp\Promise\PromiseInterface addPropertyToAspect(string $modelName, string $aspectName, $properties)
 * @method \GuzzleHttp\Promise\PromiseInterface addPropertyToType(string $modelName, string $typeName, $properties)
 * @method \GuzzleHttp\Promise\PromiseInterface updateCustomModel(string $modelName, string $description, string $namespaceUri, string $namespacePrefix)
 * @method \GuzzleHttp\Promise\PromiseInterface updateCustomType(string $modelName, string $typeName, string $description, string $parentName, string $title)
 * @method \GuzzleHttp\Promise\PromiseInterface updateCustomAspect(string $modelName, string $aspectName, string $description, string $parentName, string $title)
 * @method \GuzzleHttp\Promise\PromiseInterface getAllCustomModel()
 * @method \GuzzleHttp\Promise\PromiseInterface getCustomModel(string $modelName, array $opts=[])
 * @method \GuzzleHttp\Promise\PromiseInterface getAllCustomType(string $modelName)
 * @method \GuzzleHttp\Promise\PromiseInterface getCustomType(string $modelName, string $typeName, array $opts=[])
 * @method \GuzzleHttp\Promise\PromiseInterface getAllCustomAspect(string $modelName)
 * @method \GuzzleHttp\Promise\PromiseInterface getCustomAspect(string $modelName, string $aspectName, array $opts=[])
 * @method \GuzzleHttp\Promise\PromiseInterface getAllCustomConstraints(string $modelName)
 * @method \GuzzleHttp\Promise\PromiseInterface getCustomConstraint(string $modelName, string $constraintName, array $opts=[])
 * @method \GuzzleHttp\Promise\PromiseInterface deleteCustomModel(string $modelName)
 * @method \GuzzleHttp\Promise\PromiseInterface deleteCustomType(string $modelName, string $typeName)
 *    DownloadsApi
 * @method \GuzzleHttp\Promise\PromiseInterface cancelDownload(string $downloadId, callable $callback = null)
 * @method \GuzzleHttp\Promise\PromiseInterface createDownload(DownloadBodyCreate $downloadBodyCreate, array $opts = [], callable $callback = null)
 * @method \GuzzleHttp\Promise\PromiseInterface getDownload(string $downloadId, array $opts = [], callable $callback = null)
 *    FavoritesApi
 * @method \GuzzleHttp\Promise\PromiseInterface addFavorite(string $personId, FavoriteBody $favoriteBody)
 * @method \GuzzleHttp\Promise\PromiseInterface getFavorite(string $personId, string $favoriteId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface removeFavoriteSite(string $personId, string $favoriteId)
 *    GroupsApi
 * @method \GuzzleHttp\Promise\PromiseInterface createGroup(GroupBody $groupBody, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getGroups(array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface deleteGroup(string $groupId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getGroup(string $groupId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface updateGroup(string $groupId, GroupBody $groupBody, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getGroupMembers(string $groupId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface addGroupMember(string $groupId, GroupMember $groupMemberBody, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface deleteGroupMember(string $groupId, string $groupMemberId)
 *    NetworksApi
 * @method \GuzzleHttp\Promise\PromiseInterface getNetwork(string $networkId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getNetworkForPerson(string $personId, string $networkId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface listNetworksForPerson(string $personId, array $opts = [])
 *    NodesApi
 * /method \GuzzleHttp\Promise\PromiseInterface addNode(string $nodeId, NodeBody $nodeBody, array $opts = [])
 * /method \GuzzleHttp\Promise\PromiseInterface copyNode(string $nodeId, CopyBody $copyBody, array $opts = [])
 * /method \GuzzleHttp\Promise\PromiseInterface deleteNode(string $nodeId, array $opts = [])
 * /method \GuzzleHttp\Promise\PromiseInterface getDeletedNode(string $nodeId, array $opts = [])
 * /method \GuzzleHttp\Promise\PromiseInterface getDeletedNodes(array $opts = [])
 * /method \GuzzleHttp\Promise\PromiseInterface getFileContent(string $nodeId, array $opts = [])
 * /method \GuzzleHttp\Promise\PromiseInterface getNode(string $nodeId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getNodeContent(string $nodeId, array $opts = [])
 * /method \GuzzleHttp\Promise\PromiseInterface getNodeChildren(string $nodeId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getParents(string $nodeId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getSecondaryChildren(string $nodeId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getSourceAssociations(string $nodeId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getTargetAssociations(string $nodeId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface lockNode(string $nodeId, NodeBodyLock $nodeBodyLock, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface unlockNode(string $nodeId, array $opts = [])
 * /method \GuzzleHttp\Promise\PromiseInterface moveNode(string $nodeId, MoveBody $moveBody, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface purgeDeletedNode(string $nodeId)
 * /method \GuzzleHttp\Promise\PromiseInterface restoreNode(string $nodeId)
 * /method \GuzzleHttp\Promise\PromiseInterface updateFileContent(string $nodeId, string $contentBody, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface updateNodeContent(string $nodeId, string $nodeBody, array $opts = [])
 * /method \GuzzleHttp\Promise\PromiseInterface updateNode(string $nodeId, NodeBody $nodeBody, array $opts = [])
 *    PeopleApi
 * /method \GuzzleHttp\Promise\PromiseInterface addFavorite(string $personId, FavoriteBody $favoriteBody)
 * @method \GuzzleHttp\Promise\PromiseInterface addSiteMembershipRequest(string $personId, SiteMembershipBody $siteMembershipBody)
 * @method \GuzzleHttp\Promise\PromiseInterface deleteFavoriteSite(string $personId, string $siteId)
 * @method \GuzzleHttp\Promise\PromiseInterface favoriteSite(string $personId, FavoriteSiteBody $favoriteSiteBody)
 * @method \GuzzleHttp\Promise\PromiseInterface getActivities(string $personId, array $opts = [])
 * /method \GuzzleHttp\Promise\PromiseInterface getFavorite(string $personId, string $favoriteId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getFavoriteSite(string $personId, string $siteId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getFavoriteSites(string $personId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getFavorites(string $personId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getPerson(string $personId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getPersons(array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface addPerson(PersonBodyCreate $personBodyCreate)
 * @method \GuzzleHttp\Promise\PromiseInterface getPersonNetwork(string $personId, string $networkId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getPersonNetworks(string $personId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getPreference(string $personId, string $preferenceName, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getPreferences(string $personId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getSiteMembership(string $personId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getGroupsMembership(string $personId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getSiteMembershipRequest(string $personId, string $siteId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getSiteMembershipRequests(string $personId, array $opts = [])
 * /method \GuzzleHttp\Promise\PromiseInterface removeFavoriteSite(string $personId, string $favoriteId)
 * @method \GuzzleHttp\Promise\PromiseInterface removeSiteMembershipRequest(string $personId, string $siteId)
 * @method \GuzzleHttp\Promise\PromiseInterface updateSiteMembershipRequest(string $personId, string $siteId, SiteMembershipBody1 $siteMembershipBody1)
 *    QueriesApi
 * @method \GuzzleHttp\Promise\PromiseInterface findNodes(string $term, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface findPeople(string $term, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface findSites(string $term, array $opts = [])
 *    RatingsApi
 * @method \GuzzleHttp\Promise\PromiseInterface getRating(string $nodeId, string $ratingId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getRatings(string $nodeId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface rate(string $nodeId, RatingBody $ratingBody)
 * @method \GuzzleHttp\Promise\PromiseInterface removeRating(string $nodeId, string $ratingId)
 *    RenditionsApi
 * /method \GuzzleHttp\Promise\PromiseInterface createRendition(string $nodeId, RenditionBody $renditionBody)
 * /method \GuzzleHttp\Promise\PromiseInterface getRendition(string $nodeId, string $renditionId)
 * /method \GuzzleHttp\Promise\PromiseInterface getRenditionContent(string $nodeId, string $renditionId, array $opts = [])
 * /method \GuzzleHttp\Promise\PromiseInterface getRenditions(string $nodeId)
 * /method \GuzzleHttp\Promise\PromiseInterface getSharedLinkRenditionContent(string $sharedId, string $renditionId, $opts = [])
 * /method \GuzzleHttp\Promise\PromiseInterface getSharedLinkRenditions(string $sharedId)
 * @method \GuzzleHttp\Promise\PromiseInterface getSharedLinkRendition(string $sharedId, string $renditionId)
 *    SharedlinksApi
 * /method \GuzzleHttp\Promise\PromiseInterface addSharedLink(SharedLinkBody $sharedLinkBody, array $opts = [])
 * /method \GuzzleHttp\Promise\PromiseInterface deleteSharedLink(string $shareId)
 * /method \GuzzleHttp\Promise\PromiseInterface emailSharedLink(string $sharedId, EmailSharedLinkBody $emailSharedLinkBody)
 * /method \GuzzleHttp\Promise\PromiseInterface findSharedLinks(array $opts = [])
 * /method \GuzzleHttp\Promise\PromiseInterface getSharedLink(string $sharedId, array $opts = [])
 * /method \GuzzleHttp\Promise\PromiseInterface getSharedLinkContent(string $sharedId, array $opts = [])
 *    SiteApi
 * @method \GuzzleHttp\Promise\PromiseInterface addSiteMember(string $siteId, SiteMemberBody $siteMemberBody)
 * /method \GuzzleHttp\Promise\PromiseInterface createSite(SiteBody $siteBody, array $opts = [])
 * /method \GuzzleHttp\Promise\PromiseInterface deleteSite(string $siteId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getSite(string $siteId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getSiteContainer(string $siteId, string $containerId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getSiteContainers(string $siteId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getSiteMember(string $siteId, string $personId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getSiteMembers(string $siteId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getSites(array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface removeSiteMember(string $siteId, string $personId)
 * @method \GuzzleHttp\Promise\PromiseInterface updateSiteMember(string $siteId, string $personId, SiteMemberRoleBody $siteMemberRoleBody)
 *    TagsApi
 * @method \GuzzleHttp\Promise\PromiseInterface addTag(string $nodeId, TagBody $tagBody)
 * @method \GuzzleHttp\Promise\PromiseInterface getNodeTags(string $nodeId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getTag(string $tagId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface getTags(array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface removeTag(string $nodeId, string $tagId)
 * @method \GuzzleHttp\Promise\PromiseInterface updateTag(string $tagId, TagBody1 $tagBody)
 *    VersionsApi
 * @method \GuzzleHttp\Promise\PromiseInterface deleteVersion(string $nodeId, string $versionId)
 * @method \GuzzleHttp\Promise\PromiseInterface getVersion(string $nodeId, string $versionId)
 * @method \GuzzleHttp\Promise\PromiseInterface getVersionContent(string $nodeId, string $versionId, array $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface listVersionHistory($nodeId, $opts = [])
 * @method \GuzzleHttp\Promise\PromiseInterface revertVersion($nodeId, $versionId, $revertBody, $opts = [])
 *    WebscriptApi
 * @method \GuzzleHttp\Promise\PromiseInterface executeWebScript(string $httpMethod, string $scriptPath, array $scriptArgs = [], string $contextRoot = 'alfresco', string $servicePath = 'service', string $postBody = null)
 */
class AlfrescoCoreRestApi extends BaseListApi
{
    public static $toLoad = [
        AssociationsApi::class,
        ChangesApi::class,
        ChildAssociationsApi::class,
        ClassesApi::class,
        CommentsApi::class,
        CustomModelApi::class,
        DownloadsApi::class,
        FavoritesApi::class,
        GroupsApi::class,
        NetworksApi::class,
        NodesApi::class,
        PeopleApi::class,
        QueriesApi::class,
        RatingsApi::class,
        RenditionsApi::class,
        SharedlinksApi::class,
        SiteApi::class,
        TagsApi::class,
        VersionsApi::class,
        WebscriptApi::class,
    ];
}