<?php

/**
 * Base class that represents a row from the 'sf_guard_user' table.
 *
 * 
 *
 * @package    plugins.sfGuardPlugin.lib.model.om
 */
abstract class BasesfGuardUser extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        sfGuardUserPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the username field.
	 * @var        string
	 */
	protected $username;

	/**
	 * The value for the algorithm field.
	 * Note: this column has a database default value of: 'sha1'
	 * @var        string
	 */
	protected $algorithm;

	/**
	 * The value for the salt field.
	 * @var        string
	 */
	protected $salt;

	/**
	 * The value for the password field.
	 * @var        string
	 */
	protected $password;

	/**
	 * The value for the created_at field.
	 * @var        string
	 */
	protected $created_at;

	/**
	 * The value for the last_login field.
	 * @var        string
	 */
	protected $last_login;

	/**
	 * The value for the is_active field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $is_active;

	/**
	 * The value for the is_super_admin field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $is_super_admin;

	/**
	 * @var        array sfGuardUserPermission[] Collection to store aggregation of sfGuardUserPermission objects.
	 */
	protected $collsfGuardUserPermissions;

	/**
	 * @var        Criteria The criteria used to select the current contents of collsfGuardUserPermissions.
	 */
	private $lastsfGuardUserPermissionCriteria = null;

	/**
	 * @var        array sfGuardUserGroup[] Collection to store aggregation of sfGuardUserGroup objects.
	 */
	protected $collsfGuardUserGroups;

	/**
	 * @var        Criteria The criteria used to select the current contents of collsfGuardUserGroups.
	 */
	private $lastsfGuardUserGroupCriteria = null;

	/**
	 * @var        array sfGuardRememberKey[] Collection to store aggregation of sfGuardRememberKey objects.
	 */
	protected $collsfGuardRememberKeys;

	/**
	 * @var        Criteria The criteria used to select the current contents of collsfGuardRememberKeys.
	 */
	private $lastsfGuardRememberKeyCriteria = null;

	/**
	 * @var        array Component[] Collection to store aggregation of Component objects.
	 */
	protected $collComponents;

	/**
	 * @var        Criteria The criteria used to select the current contents of collComponents.
	 */
	private $lastComponentCriteria = null;

	/**
	 * @var        sfGuardUserProfile one-to-one related sfGuardUserProfile object
	 */
	protected $singlesfGuardUserProfile;

	/**
	 * @var        array Ticket[] Collection to store aggregation of Ticket objects.
	 */
	protected $collTicketsRelatedByUserId;

	/**
	 * @var        Criteria The criteria used to select the current contents of collTicketsRelatedByUserId.
	 */
	private $lastTicketRelatedByUserIdCriteria = null;

	/**
	 * @var        array Ticket[] Collection to store aggregation of Ticket objects.
	 */
	protected $collTicketsRelatedByOwnerId;

	/**
	 * @var        Criteria The criteria used to select the current contents of collTicketsRelatedByOwnerId.
	 */
	private $lastTicketRelatedByOwnerIdCriteria = null;

	/**
	 * @var        array TicketComment[] Collection to store aggregation of TicketComment objects.
	 */
	protected $collTicketComments;

	/**
	 * @var        Criteria The criteria used to select the current contents of collTicketComments.
	 */
	private $lastTicketCommentCriteria = null;

	/**
	 * @var        array Changelog[] Collection to store aggregation of Changelog objects.
	 */
	protected $collChangelogs;

	/**
	 * @var        Criteria The criteria used to select the current contents of collChangelogs.
	 */
	private $lastChangelogCriteria = null;

	/**
	 * @var        array ProjectUser[] Collection to store aggregation of ProjectUser objects.
	 */
	protected $collProjectUsers;

	/**
	 * @var        Criteria The criteria used to select the current contents of collProjectUsers.
	 */
	private $lastProjectUserCriteria = null;

	/**
	 * @var        array Timetrack[] Collection to store aggregation of Timetrack objects.
	 */
	protected $collTimetracks;

	/**
	 * @var        Criteria The criteria used to select the current contents of collTimetracks.
	 */
	private $lastTimetrackCriteria = null;

	/**
	 * @var        array FilterHistory[] Collection to store aggregation of FilterHistory objects.
	 */
	protected $collFilterHistorys;

	/**
	 * @var        Criteria The criteria used to select the current contents of collFilterHistorys.
	 */
	private $lastFilterHistoryCriteria = null;

	/**
	 * @var        array ProjectPermission[] Collection to store aggregation of ProjectPermission objects.
	 */
	protected $collProjectPermissions;

	/**
	 * @var        Criteria The criteria used to select the current contents of collProjectPermissions.
	 */
	private $lastProjectPermissionCriteria = null;

	/**
	 * @var        array afPortalState[] Collection to store aggregation of afPortalState objects.
	 */
	protected $collafPortalStates;

	/**
	 * @var        Criteria The criteria used to select the current contents of collafPortalStates.
	 */
	private $lastafPortalStateCriteria = null;

	/**
	 * @var        array afWidgetSetting[] Collection to store aggregation of afWidgetSetting objects.
	 */
	protected $collafWidgetSettings;

	/**
	 * @var        Criteria The criteria used to select the current contents of collafWidgetSettings.
	 */
	private $lastafWidgetSettingCriteria = null;

	/**
	 * @var        array afSaveFilter[] Collection to store aggregation of afSaveFilter objects.
	 */
	protected $collafSaveFilters;

	/**
	 * @var        Criteria The criteria used to select the current contents of collafSaveFilters.
	 */
	private $lastafSaveFilterCriteria = null;

	/**
	 * @var        array afNotification[] Collection to store aggregation of afNotification objects.
	 */
	protected $collafNotificationsRelatedByCreatedBy;

	/**
	 * @var        Criteria The criteria used to select the current contents of collafNotificationsRelatedByCreatedBy.
	 */
	private $lastafNotificationRelatedByCreatedByCriteria = null;

	/**
	 * @var        array afNotification[] Collection to store aggregation of afNotification objects.
	 */
	protected $collafNotificationsRelatedByCreatedFor;

	/**
	 * @var        Criteria The criteria used to select the current contents of collafNotificationsRelatedByCreatedFor.
	 */
	private $lastafNotificationRelatedByCreatedForCriteria = null;

	/**
	 * @var        array afNotifiedFor[] Collection to store aggregation of afNotifiedFor objects.
	 */
	protected $collafNotifiedFors;

	/**
	 * @var        Criteria The criteria used to select the current contents of collafNotifiedFors.
	 */
	private $lastafNotifiedForCriteria = null;

	/**
	 * @var        array afWidgetHelpSettings[] Collection to store aggregation of afWidgetHelpSettings objects.
	 */
	protected $collafWidgetHelpSettingss;

	/**
	 * @var        Criteria The criteria used to select the current contents of collafWidgetHelpSettingss.
	 */
	private $lastafWidgetHelpSettingsCriteria = null;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	// symfony behavior
	
	const PEER = 'sfGuardUserPeer';

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->algorithm = 'sha1';
		$this->is_active = true;
		$this->is_super_admin = false;
	}

	/**
	 * Initializes internal state of BasesfGuardUser object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [username] column value.
	 * 
	 * @return     string
	 */
	public function getUsername()
	{
		return $this->username;
	}

	/**
	 * Get the [algorithm] column value.
	 * 
	 * @return     string
	 */
	public function getAlgorithm()
	{
		return $this->algorithm;
	}

	/**
	 * Get the [salt] column value.
	 * 
	 * @return     string
	 */
	public function getSalt()
	{
		return $this->salt;
	}

	/**
	 * Get the [password] column value.
	 * 
	 * @return     string
	 */
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * Get the [optionally formatted] temporal [created_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{
		if ($this->created_at === null) {
			return null;
		}


		if ($this->created_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->created_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [last_login] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getLastLogin($format = 'Y-m-d H:i:s')
	{
		if ($this->last_login === null) {
			return null;
		}


		if ($this->last_login === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->last_login);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->last_login, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [is_active] column value.
	 * 
	 * @return     boolean
	 */
	public function getIsActive()
	{
		return $this->is_active;
	}

	/**
	 * Get the [is_super_admin] column value.
	 * 
	 * @return     boolean
	 */
	public function getIsSuperAdmin()
	{
		return $this->is_super_admin;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     sfGuardUser The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = sfGuardUserPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [username] column.
	 * 
	 * @param      string $v new value
	 * @return     sfGuardUser The current object (for fluent API support)
	 */
	public function setUsername($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->username !== $v) {
			$this->username = $v;
			$this->modifiedColumns[] = sfGuardUserPeer::USERNAME;
		}

		return $this;
	} // setUsername()

	/**
	 * Set the value of [algorithm] column.
	 * 
	 * @param      string $v new value
	 * @return     sfGuardUser The current object (for fluent API support)
	 */
	public function setAlgorithm($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->algorithm !== $v || $this->isNew()) {
			$this->algorithm = $v;
			$this->modifiedColumns[] = sfGuardUserPeer::ALGORITHM;
		}

		return $this;
	} // setAlgorithm()

	/**
	 * Set the value of [salt] column.
	 * 
	 * @param      string $v new value
	 * @return     sfGuardUser The current object (for fluent API support)
	 */
	public function setSalt($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->salt !== $v) {
			$this->salt = $v;
			$this->modifiedColumns[] = sfGuardUserPeer::SALT;
		}

		return $this;
	} // setSalt()

	/**
	 * Set the value of [password] column.
	 * 
	 * @param      string $v new value
	 * @return     sfGuardUser The current object (for fluent API support)
	 */
	public function setPassword($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->password !== $v) {
			$this->password = $v;
			$this->modifiedColumns[] = sfGuardUserPeer::PASSWORD;
		}

		return $this;
	} // setPassword()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     sfGuardUser The current object (for fluent API support)
	 */
	public function setCreatedAt($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->created_at !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->created_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = sfGuardUserPeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

	/**
	 * Sets the value of [last_login] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     sfGuardUser The current object (for fluent API support)
	 */
	public function setLastLogin($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->last_login !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->last_login !== null && $tmpDt = new DateTime($this->last_login)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->last_login = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = sfGuardUserPeer::LAST_LOGIN;
			}
		} // if either are not null

		return $this;
	} // setLastLogin()

	/**
	 * Set the value of [is_active] column.
	 * 
	 * @param      boolean $v new value
	 * @return     sfGuardUser The current object (for fluent API support)
	 */
	public function setIsActive($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_active !== $v || $this->isNew()) {
			$this->is_active = $v;
			$this->modifiedColumns[] = sfGuardUserPeer::IS_ACTIVE;
		}

		return $this;
	} // setIsActive()

	/**
	 * Set the value of [is_super_admin] column.
	 * 
	 * @param      boolean $v new value
	 * @return     sfGuardUser The current object (for fluent API support)
	 */
	public function setIsSuperAdmin($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_super_admin !== $v || $this->isNew()) {
			$this->is_super_admin = $v;
			$this->modifiedColumns[] = sfGuardUserPeer::IS_SUPER_ADMIN;
		}

		return $this;
	} // setIsSuperAdmin()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			if ($this->algorithm !== 'sha1') {
				return false;
			}

			if ($this->is_active !== true) {
				return false;
			}

			if ($this->is_super_admin !== false) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->username = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->algorithm = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->salt = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->password = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->created_at = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->last_login = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->is_active = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
			$this->is_super_admin = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 9; // 9 = sfGuardUserPeer::NUM_COLUMNS - sfGuardUserPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating sfGuardUser object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(sfGuardUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = sfGuardUserPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collsfGuardUserPermissions = null;
			$this->lastsfGuardUserPermissionCriteria = null;

			$this->collsfGuardUserGroups = null;
			$this->lastsfGuardUserGroupCriteria = null;

			$this->collsfGuardRememberKeys = null;
			$this->lastsfGuardRememberKeyCriteria = null;

			$this->collComponents = null;
			$this->lastComponentCriteria = null;

			$this->singlesfGuardUserProfile = null;

			$this->collTicketsRelatedByUserId = null;
			$this->lastTicketRelatedByUserIdCriteria = null;

			$this->collTicketsRelatedByOwnerId = null;
			$this->lastTicketRelatedByOwnerIdCriteria = null;

			$this->collTicketComments = null;
			$this->lastTicketCommentCriteria = null;

			$this->collChangelogs = null;
			$this->lastChangelogCriteria = null;

			$this->collProjectUsers = null;
			$this->lastProjectUserCriteria = null;

			$this->collTimetracks = null;
			$this->lastTimetrackCriteria = null;

			$this->collFilterHistorys = null;
			$this->lastFilterHistoryCriteria = null;

			$this->collProjectPermissions = null;
			$this->lastProjectPermissionCriteria = null;

			$this->collafPortalStates = null;
			$this->lastafPortalStateCriteria = null;

			$this->collafWidgetSettings = null;
			$this->lastafWidgetSettingCriteria = null;

			$this->collafSaveFilters = null;
			$this->lastafSaveFilterCriteria = null;

			$this->collafNotificationsRelatedByCreatedBy = null;
			$this->lastafNotificationRelatedByCreatedByCriteria = null;

			$this->collafNotificationsRelatedByCreatedFor = null;
			$this->lastafNotificationRelatedByCreatedForCriteria = null;

			$this->collafNotifiedFors = null;
			$this->lastafNotifiedForCriteria = null;

			$this->collafWidgetHelpSettingss = null;
			$this->lastafWidgetHelpSettingsCriteria = null;

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(sfGuardUserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasesfGuardUser:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			
			    return;
			  }
			}

			if ($ret) {
				sfGuardUserPeer::doDelete($this, $con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BasesfGuardUser:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$this->setDeleted(true);
				$con->commit();
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(sfGuardUserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasesfGuardUser:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			    $con->commit();
			
			    return $affectedRows;
			  }
			}

			// symfony_timestampable behavior
			
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
				// symfony_timestampable behavior
				if (!$this->isColumnModified(sfGuardUserPeer::CREATED_AT))
				{
				  $this->setCreatedAt(time());
				}

			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BasesfGuardUser:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				sfGuardUserPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() ) {
				$this->modifiedColumns[] = sfGuardUserPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = sfGuardUserPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += sfGuardUserPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collsfGuardUserPermissions !== null) {
				foreach ($this->collsfGuardUserPermissions as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collsfGuardUserGroups !== null) {
				foreach ($this->collsfGuardUserGroups as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collsfGuardRememberKeys !== null) {
				foreach ($this->collsfGuardRememberKeys as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collComponents !== null) {
				foreach ($this->collComponents as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->singlesfGuardUserProfile !== null) {
				if (!$this->singlesfGuardUserProfile->isDeleted()) {
						$affectedRows += $this->singlesfGuardUserProfile->save($con);
				}
			}

			if ($this->collTicketsRelatedByUserId !== null) {
				foreach ($this->collTicketsRelatedByUserId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTicketsRelatedByOwnerId !== null) {
				foreach ($this->collTicketsRelatedByOwnerId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTicketComments !== null) {
				foreach ($this->collTicketComments as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collChangelogs !== null) {
				foreach ($this->collChangelogs as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collProjectUsers !== null) {
				foreach ($this->collProjectUsers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTimetracks !== null) {
				foreach ($this->collTimetracks as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collFilterHistorys !== null) {
				foreach ($this->collFilterHistorys as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collProjectPermissions !== null) {
				foreach ($this->collProjectPermissions as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collafPortalStates !== null) {
				foreach ($this->collafPortalStates as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collafWidgetSettings !== null) {
				foreach ($this->collafWidgetSettings as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collafSaveFilters !== null) {
				foreach ($this->collafSaveFilters as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collafNotificationsRelatedByCreatedBy !== null) {
				foreach ($this->collafNotificationsRelatedByCreatedBy as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collafNotificationsRelatedByCreatedFor !== null) {
				foreach ($this->collafNotificationsRelatedByCreatedFor as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collafNotifiedFors !== null) {
				foreach ($this->collafNotifiedFors as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collafWidgetHelpSettingss !== null) {
				foreach ($this->collafWidgetHelpSettingss as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = sfGuardUserPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collsfGuardUserPermissions !== null) {
					foreach ($this->collsfGuardUserPermissions as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collsfGuardUserGroups !== null) {
					foreach ($this->collsfGuardUserGroups as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collsfGuardRememberKeys !== null) {
					foreach ($this->collsfGuardRememberKeys as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collComponents !== null) {
					foreach ($this->collComponents as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->singlesfGuardUserProfile !== null) {
					if (!$this->singlesfGuardUserProfile->validate($columns)) {
						$failureMap = array_merge($failureMap, $this->singlesfGuardUserProfile->getValidationFailures());
					}
				}

				if ($this->collTicketsRelatedByUserId !== null) {
					foreach ($this->collTicketsRelatedByUserId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTicketsRelatedByOwnerId !== null) {
					foreach ($this->collTicketsRelatedByOwnerId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTicketComments !== null) {
					foreach ($this->collTicketComments as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collChangelogs !== null) {
					foreach ($this->collChangelogs as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collProjectUsers !== null) {
					foreach ($this->collProjectUsers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTimetracks !== null) {
					foreach ($this->collTimetracks as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collFilterHistorys !== null) {
					foreach ($this->collFilterHistorys as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collProjectPermissions !== null) {
					foreach ($this->collProjectPermissions as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collafPortalStates !== null) {
					foreach ($this->collafPortalStates as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collafWidgetSettings !== null) {
					foreach ($this->collafWidgetSettings as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collafSaveFilters !== null) {
					foreach ($this->collafSaveFilters as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collafNotificationsRelatedByCreatedBy !== null) {
					foreach ($this->collafNotificationsRelatedByCreatedBy as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collafNotificationsRelatedByCreatedFor !== null) {
					foreach ($this->collafNotificationsRelatedByCreatedFor as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collafNotifiedFors !== null) {
					foreach ($this->collafNotifiedFors as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collafWidgetHelpSettingss !== null) {
					foreach ($this->collafWidgetHelpSettingss as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = sfGuardUserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getUsername();
				break;
			case 2:
				return $this->getAlgorithm();
				break;
			case 3:
				return $this->getSalt();
				break;
			case 4:
				return $this->getPassword();
				break;
			case 5:
				return $this->getCreatedAt();
				break;
			case 6:
				return $this->getLastLogin();
				break;
			case 7:
				return $this->getIsActive();
				break;
			case 8:
				return $this->getIsSuperAdmin();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = sfGuardUserPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUsername(),
			$keys[2] => $this->getAlgorithm(),
			$keys[3] => $this->getSalt(),
			$keys[4] => $this->getPassword(),
			$keys[5] => $this->getCreatedAt(),
			$keys[6] => $this->getLastLogin(),
			$keys[7] => $this->getIsActive(),
			$keys[8] => $this->getIsSuperAdmin(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = sfGuardUserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setUsername($value);
				break;
			case 2:
				$this->setAlgorithm($value);
				break;
			case 3:
				$this->setSalt($value);
				break;
			case 4:
				$this->setPassword($value);
				break;
			case 5:
				$this->setCreatedAt($value);
				break;
			case 6:
				$this->setLastLogin($value);
				break;
			case 7:
				$this->setIsActive($value);
				break;
			case 8:
				$this->setIsSuperAdmin($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = sfGuardUserPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUsername($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAlgorithm($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSalt($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPassword($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setLastLogin($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setIsActive($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setIsSuperAdmin($arr[$keys[8]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);

		if ($this->isColumnModified(sfGuardUserPeer::ID)) $criteria->add(sfGuardUserPeer::ID, $this->id);
		if ($this->isColumnModified(sfGuardUserPeer::USERNAME)) $criteria->add(sfGuardUserPeer::USERNAME, $this->username);
		if ($this->isColumnModified(sfGuardUserPeer::ALGORITHM)) $criteria->add(sfGuardUserPeer::ALGORITHM, $this->algorithm);
		if ($this->isColumnModified(sfGuardUserPeer::SALT)) $criteria->add(sfGuardUserPeer::SALT, $this->salt);
		if ($this->isColumnModified(sfGuardUserPeer::PASSWORD)) $criteria->add(sfGuardUserPeer::PASSWORD, $this->password);
		if ($this->isColumnModified(sfGuardUserPeer::CREATED_AT)) $criteria->add(sfGuardUserPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(sfGuardUserPeer::LAST_LOGIN)) $criteria->add(sfGuardUserPeer::LAST_LOGIN, $this->last_login);
		if ($this->isColumnModified(sfGuardUserPeer::IS_ACTIVE)) $criteria->add(sfGuardUserPeer::IS_ACTIVE, $this->is_active);
		if ($this->isColumnModified(sfGuardUserPeer::IS_SUPER_ADMIN)) $criteria->add(sfGuardUserPeer::IS_SUPER_ADMIN, $this->is_super_admin);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);

		$criteria->add(sfGuardUserPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of sfGuardUser (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setUsername($this->username);

		$copyObj->setAlgorithm($this->algorithm);

		$copyObj->setSalt($this->salt);

		$copyObj->setPassword($this->password);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setLastLogin($this->last_login);

		$copyObj->setIsActive($this->is_active);

		$copyObj->setIsSuperAdmin($this->is_super_admin);


		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getsfGuardUserPermissions() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addsfGuardUserPermission($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getsfGuardUserGroups() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addsfGuardUserGroup($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getsfGuardRememberKeys() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addsfGuardRememberKey($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getComponents() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addComponent($relObj->copy($deepCopy));
				}
			}

			$relObj = $this->getsfGuardUserProfile();
			if ($relObj) {
				$copyObj->setsfGuardUserProfile($relObj->copy($deepCopy));
			}

			foreach ($this->getTicketsRelatedByUserId() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTicketRelatedByUserId($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getTicketsRelatedByOwnerId() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTicketRelatedByOwnerId($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getTicketComments() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTicketComment($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getChangelogs() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addChangelog($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getProjectUsers() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addProjectUser($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getTimetracks() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTimetrack($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getFilterHistorys() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addFilterHistory($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getProjectPermissions() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addProjectPermission($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getafPortalStates() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addafPortalState($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getafWidgetSettings() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addafWidgetSetting($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getafSaveFilters() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addafSaveFilter($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getafNotificationsRelatedByCreatedBy() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addafNotificationRelatedByCreatedBy($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getafNotificationsRelatedByCreatedFor() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addafNotificationRelatedByCreatedFor($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getafNotifiedFors() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addafNotifiedFor($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getafWidgetHelpSettingss() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addafWidgetHelpSettings($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)


		$copyObj->setNew(true);

		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     sfGuardUser Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     sfGuardUserPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new sfGuardUserPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears out the collsfGuardUserPermissions collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addsfGuardUserPermissions()
	 */
	public function clearsfGuardUserPermissions()
	{
		$this->collsfGuardUserPermissions = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collsfGuardUserPermissions collection (array).
	 *
	 * By default this just sets the collsfGuardUserPermissions collection to an empty array (like clearcollsfGuardUserPermissions());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initsfGuardUserPermissions()
	{
		$this->collsfGuardUserPermissions = array();
	}

	/**
	 * Gets an array of sfGuardUserPermission objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related sfGuardUserPermissions from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array sfGuardUserPermission[]
	 * @throws     PropelException
	 */
	public function getsfGuardUserPermissions($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collsfGuardUserPermissions === null) {
			if ($this->isNew()) {
			   $this->collsfGuardUserPermissions = array();
			} else {

				$criteria->add(sfGuardUserPermissionPeer::USER_ID, $this->id);

				sfGuardUserPermissionPeer::addSelectColumns($criteria);
				$this->collsfGuardUserPermissions = sfGuardUserPermissionPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(sfGuardUserPermissionPeer::USER_ID, $this->id);

				sfGuardUserPermissionPeer::addSelectColumns($criteria);
				if (!isset($this->lastsfGuardUserPermissionCriteria) || !$this->lastsfGuardUserPermissionCriteria->equals($criteria)) {
					$this->collsfGuardUserPermissions = sfGuardUserPermissionPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastsfGuardUserPermissionCriteria = $criteria;
		return $this->collsfGuardUserPermissions;
	}

	/**
	 * Returns the number of related sfGuardUserPermission objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related sfGuardUserPermission objects.
	 * @throws     PropelException
	 */
	public function countsfGuardUserPermissions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collsfGuardUserPermissions === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(sfGuardUserPermissionPeer::USER_ID, $this->id);

				$count = sfGuardUserPermissionPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(sfGuardUserPermissionPeer::USER_ID, $this->id);

				if (!isset($this->lastsfGuardUserPermissionCriteria) || !$this->lastsfGuardUserPermissionCriteria->equals($criteria)) {
					$count = sfGuardUserPermissionPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collsfGuardUserPermissions);
				}
			} else {
				$count = count($this->collsfGuardUserPermissions);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a sfGuardUserPermission object to this object
	 * through the sfGuardUserPermission foreign key attribute.
	 *
	 * @param      sfGuardUserPermission $l sfGuardUserPermission
	 * @return     void
	 * @throws     PropelException
	 */
	public function addsfGuardUserPermission(sfGuardUserPermission $l)
	{
		if ($this->collsfGuardUserPermissions === null) {
			$this->initsfGuardUserPermissions();
		}
		if (!in_array($l, $this->collsfGuardUserPermissions, true)) { // only add it if the **same** object is not already associated
			array_push($this->collsfGuardUserPermissions, $l);
			$l->setsfGuardUser($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related sfGuardUserPermissions from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getsfGuardUserPermissionsJoinsfGuardPermission($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collsfGuardUserPermissions === null) {
			if ($this->isNew()) {
				$this->collsfGuardUserPermissions = array();
			} else {

				$criteria->add(sfGuardUserPermissionPeer::USER_ID, $this->id);

				$this->collsfGuardUserPermissions = sfGuardUserPermissionPeer::doSelectJoinsfGuardPermission($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(sfGuardUserPermissionPeer::USER_ID, $this->id);

			if (!isset($this->lastsfGuardUserPermissionCriteria) || !$this->lastsfGuardUserPermissionCriteria->equals($criteria)) {
				$this->collsfGuardUserPermissions = sfGuardUserPermissionPeer::doSelectJoinsfGuardPermission($criteria, $con, $join_behavior);
			}
		}
		$this->lastsfGuardUserPermissionCriteria = $criteria;

		return $this->collsfGuardUserPermissions;
	}

	/**
	 * Clears out the collsfGuardUserGroups collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addsfGuardUserGroups()
	 */
	public function clearsfGuardUserGroups()
	{
		$this->collsfGuardUserGroups = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collsfGuardUserGroups collection (array).
	 *
	 * By default this just sets the collsfGuardUserGroups collection to an empty array (like clearcollsfGuardUserGroups());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initsfGuardUserGroups()
	{
		$this->collsfGuardUserGroups = array();
	}

	/**
	 * Gets an array of sfGuardUserGroup objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related sfGuardUserGroups from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array sfGuardUserGroup[]
	 * @throws     PropelException
	 */
	public function getsfGuardUserGroups($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collsfGuardUserGroups === null) {
			if ($this->isNew()) {
			   $this->collsfGuardUserGroups = array();
			} else {

				$criteria->add(sfGuardUserGroupPeer::USER_ID, $this->id);

				sfGuardUserGroupPeer::addSelectColumns($criteria);
				$this->collsfGuardUserGroups = sfGuardUserGroupPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(sfGuardUserGroupPeer::USER_ID, $this->id);

				sfGuardUserGroupPeer::addSelectColumns($criteria);
				if (!isset($this->lastsfGuardUserGroupCriteria) || !$this->lastsfGuardUserGroupCriteria->equals($criteria)) {
					$this->collsfGuardUserGroups = sfGuardUserGroupPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastsfGuardUserGroupCriteria = $criteria;
		return $this->collsfGuardUserGroups;
	}

	/**
	 * Returns the number of related sfGuardUserGroup objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related sfGuardUserGroup objects.
	 * @throws     PropelException
	 */
	public function countsfGuardUserGroups(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collsfGuardUserGroups === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(sfGuardUserGroupPeer::USER_ID, $this->id);

				$count = sfGuardUserGroupPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(sfGuardUserGroupPeer::USER_ID, $this->id);

				if (!isset($this->lastsfGuardUserGroupCriteria) || !$this->lastsfGuardUserGroupCriteria->equals($criteria)) {
					$count = sfGuardUserGroupPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collsfGuardUserGroups);
				}
			} else {
				$count = count($this->collsfGuardUserGroups);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a sfGuardUserGroup object to this object
	 * through the sfGuardUserGroup foreign key attribute.
	 *
	 * @param      sfGuardUserGroup $l sfGuardUserGroup
	 * @return     void
	 * @throws     PropelException
	 */
	public function addsfGuardUserGroup(sfGuardUserGroup $l)
	{
		if ($this->collsfGuardUserGroups === null) {
			$this->initsfGuardUserGroups();
		}
		if (!in_array($l, $this->collsfGuardUserGroups, true)) { // only add it if the **same** object is not already associated
			array_push($this->collsfGuardUserGroups, $l);
			$l->setsfGuardUser($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related sfGuardUserGroups from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getsfGuardUserGroupsJoinsfGuardGroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collsfGuardUserGroups === null) {
			if ($this->isNew()) {
				$this->collsfGuardUserGroups = array();
			} else {

				$criteria->add(sfGuardUserGroupPeer::USER_ID, $this->id);

				$this->collsfGuardUserGroups = sfGuardUserGroupPeer::doSelectJoinsfGuardGroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(sfGuardUserGroupPeer::USER_ID, $this->id);

			if (!isset($this->lastsfGuardUserGroupCriteria) || !$this->lastsfGuardUserGroupCriteria->equals($criteria)) {
				$this->collsfGuardUserGroups = sfGuardUserGroupPeer::doSelectJoinsfGuardGroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastsfGuardUserGroupCriteria = $criteria;

		return $this->collsfGuardUserGroups;
	}

	/**
	 * Clears out the collsfGuardRememberKeys collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addsfGuardRememberKeys()
	 */
	public function clearsfGuardRememberKeys()
	{
		$this->collsfGuardRememberKeys = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collsfGuardRememberKeys collection (array).
	 *
	 * By default this just sets the collsfGuardRememberKeys collection to an empty array (like clearcollsfGuardRememberKeys());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initsfGuardRememberKeys()
	{
		$this->collsfGuardRememberKeys = array();
	}

	/**
	 * Gets an array of sfGuardRememberKey objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related sfGuardRememberKeys from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array sfGuardRememberKey[]
	 * @throws     PropelException
	 */
	public function getsfGuardRememberKeys($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collsfGuardRememberKeys === null) {
			if ($this->isNew()) {
			   $this->collsfGuardRememberKeys = array();
			} else {

				$criteria->add(sfGuardRememberKeyPeer::USER_ID, $this->id);

				sfGuardRememberKeyPeer::addSelectColumns($criteria);
				$this->collsfGuardRememberKeys = sfGuardRememberKeyPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(sfGuardRememberKeyPeer::USER_ID, $this->id);

				sfGuardRememberKeyPeer::addSelectColumns($criteria);
				if (!isset($this->lastsfGuardRememberKeyCriteria) || !$this->lastsfGuardRememberKeyCriteria->equals($criteria)) {
					$this->collsfGuardRememberKeys = sfGuardRememberKeyPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastsfGuardRememberKeyCriteria = $criteria;
		return $this->collsfGuardRememberKeys;
	}

	/**
	 * Returns the number of related sfGuardRememberKey objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related sfGuardRememberKey objects.
	 * @throws     PropelException
	 */
	public function countsfGuardRememberKeys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collsfGuardRememberKeys === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(sfGuardRememberKeyPeer::USER_ID, $this->id);

				$count = sfGuardRememberKeyPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(sfGuardRememberKeyPeer::USER_ID, $this->id);

				if (!isset($this->lastsfGuardRememberKeyCriteria) || !$this->lastsfGuardRememberKeyCriteria->equals($criteria)) {
					$count = sfGuardRememberKeyPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collsfGuardRememberKeys);
				}
			} else {
				$count = count($this->collsfGuardRememberKeys);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a sfGuardRememberKey object to this object
	 * through the sfGuardRememberKey foreign key attribute.
	 *
	 * @param      sfGuardRememberKey $l sfGuardRememberKey
	 * @return     void
	 * @throws     PropelException
	 */
	public function addsfGuardRememberKey(sfGuardRememberKey $l)
	{
		if ($this->collsfGuardRememberKeys === null) {
			$this->initsfGuardRememberKeys();
		}
		if (!in_array($l, $this->collsfGuardRememberKeys, true)) { // only add it if the **same** object is not already associated
			array_push($this->collsfGuardRememberKeys, $l);
			$l->setsfGuardUser($this);
		}
	}

	/**
	 * Clears out the collComponents collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addComponents()
	 */
	public function clearComponents()
	{
		$this->collComponents = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collComponents collection (array).
	 *
	 * By default this just sets the collComponents collection to an empty array (like clearcollComponents());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initComponents()
	{
		$this->collComponents = array();
	}

	/**
	 * Gets an array of Component objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related Components from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array Component[]
	 * @throws     PropelException
	 */
	public function getComponents($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collComponents === null) {
			if ($this->isNew()) {
			   $this->collComponents = array();
			} else {

				$criteria->add(ComponentPeer::OWNER_ID, $this->id);

				ComponentPeer::addSelectColumns($criteria);
				$this->collComponents = ComponentPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(ComponentPeer::OWNER_ID, $this->id);

				ComponentPeer::addSelectColumns($criteria);
				if (!isset($this->lastComponentCriteria) || !$this->lastComponentCriteria->equals($criteria)) {
					$this->collComponents = ComponentPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastComponentCriteria = $criteria;
		return $this->collComponents;
	}

	/**
	 * Returns the number of related Component objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Component objects.
	 * @throws     PropelException
	 */
	public function countComponents(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collComponents === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(ComponentPeer::OWNER_ID, $this->id);

				$count = ComponentPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(ComponentPeer::OWNER_ID, $this->id);

				if (!isset($this->lastComponentCriteria) || !$this->lastComponentCriteria->equals($criteria)) {
					$count = ComponentPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collComponents);
				}
			} else {
				$count = count($this->collComponents);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a Component object to this object
	 * through the Component foreign key attribute.
	 *
	 * @param      Component $l Component
	 * @return     void
	 * @throws     PropelException
	 */
	public function addComponent(Component $l)
	{
		if ($this->collComponents === null) {
			$this->initComponents();
		}
		if (!in_array($l, $this->collComponents, true)) { // only add it if the **same** object is not already associated
			array_push($this->collComponents, $l);
			$l->setsfGuardUser($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related Components from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getComponentsJoinProject($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collComponents === null) {
			if ($this->isNew()) {
				$this->collComponents = array();
			} else {

				$criteria->add(ComponentPeer::OWNER_ID, $this->id);

				$this->collComponents = ComponentPeer::doSelectJoinProject($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(ComponentPeer::OWNER_ID, $this->id);

			if (!isset($this->lastComponentCriteria) || !$this->lastComponentCriteria->equals($criteria)) {
				$this->collComponents = ComponentPeer::doSelectJoinProject($criteria, $con, $join_behavior);
			}
		}
		$this->lastComponentCriteria = $criteria;

		return $this->collComponents;
	}

	/**
	 * Gets a single sfGuardUserProfile object, which is related to this object by a one-to-one relationship.
	 *
	 * @param      PropelPDO $con
	 * @return     sfGuardUserProfile
	 * @throws     PropelException
	 */
	public function getsfGuardUserProfile(PropelPDO $con = null)
	{

		if ($this->singlesfGuardUserProfile === null && !$this->isNew()) {
			$this->singlesfGuardUserProfile = sfGuardUserProfilePeer::retrieveByPK($this->id, $con);
		}

		return $this->singlesfGuardUserProfile;
	}

	/**
	 * Sets a single sfGuardUserProfile object as related to this object by a one-to-one relationship.
	 *
	 * @param      sfGuardUserProfile $l sfGuardUserProfile
	 * @return     sfGuardUser The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setsfGuardUserProfile(sfGuardUserProfile $v)
	{
		$this->singlesfGuardUserProfile = $v;

		// Make sure that that the passed-in sfGuardUserProfile isn't already associated with this object
		if ($v->getsfGuardUser() === null) {
			$v->setsfGuardUser($this);
		}

		return $this;
	}

	/**
	 * Clears out the collTicketsRelatedByUserId collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTicketsRelatedByUserId()
	 */
	public function clearTicketsRelatedByUserId()
	{
		$this->collTicketsRelatedByUserId = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTicketsRelatedByUserId collection (array).
	 *
	 * By default this just sets the collTicketsRelatedByUserId collection to an empty array (like clearcollTicketsRelatedByUserId());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initTicketsRelatedByUserId()
	{
		$this->collTicketsRelatedByUserId = array();
	}

	/**
	 * Gets an array of Ticket objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related TicketsRelatedByUserId from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array Ticket[]
	 * @throws     PropelException
	 */
	public function getTicketsRelatedByUserId($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTicketsRelatedByUserId === null) {
			if ($this->isNew()) {
			   $this->collTicketsRelatedByUserId = array();
			} else {

				$criteria->add(TicketPeer::USER_ID, $this->id);

				TicketPeer::addSelectColumns($criteria);
				$this->collTicketsRelatedByUserId = TicketPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(TicketPeer::USER_ID, $this->id);

				TicketPeer::addSelectColumns($criteria);
				if (!isset($this->lastTicketRelatedByUserIdCriteria) || !$this->lastTicketRelatedByUserIdCriteria->equals($criteria)) {
					$this->collTicketsRelatedByUserId = TicketPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTicketRelatedByUserIdCriteria = $criteria;
		return $this->collTicketsRelatedByUserId;
	}

	/**
	 * Returns the number of related Ticket objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Ticket objects.
	 * @throws     PropelException
	 */
	public function countTicketsRelatedByUserId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collTicketsRelatedByUserId === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(TicketPeer::USER_ID, $this->id);

				$count = TicketPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(TicketPeer::USER_ID, $this->id);

				if (!isset($this->lastTicketRelatedByUserIdCriteria) || !$this->lastTicketRelatedByUserIdCriteria->equals($criteria)) {
					$count = TicketPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collTicketsRelatedByUserId);
				}
			} else {
				$count = count($this->collTicketsRelatedByUserId);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a Ticket object to this object
	 * through the Ticket foreign key attribute.
	 *
	 * @param      Ticket $l Ticket
	 * @return     void
	 * @throws     PropelException
	 */
	public function addTicketRelatedByUserId(Ticket $l)
	{
		if ($this->collTicketsRelatedByUserId === null) {
			$this->initTicketsRelatedByUserId();
		}
		if (!in_array($l, $this->collTicketsRelatedByUserId, true)) { // only add it if the **same** object is not already associated
			array_push($this->collTicketsRelatedByUserId, $l);
			$l->setsfGuardUserRelatedByUserId($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related TicketsRelatedByUserId from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getTicketsRelatedByUserIdJoinComponent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTicketsRelatedByUserId === null) {
			if ($this->isNew()) {
				$this->collTicketsRelatedByUserId = array();
			} else {

				$criteria->add(TicketPeer::USER_ID, $this->id);

				$this->collTicketsRelatedByUserId = TicketPeer::doSelectJoinComponent($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(TicketPeer::USER_ID, $this->id);

			if (!isset($this->lastTicketRelatedByUserIdCriteria) || !$this->lastTicketRelatedByUserIdCriteria->equals($criteria)) {
				$this->collTicketsRelatedByUserId = TicketPeer::doSelectJoinComponent($criteria, $con, $join_behavior);
			}
		}
		$this->lastTicketRelatedByUserIdCriteria = $criteria;

		return $this->collTicketsRelatedByUserId;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related TicketsRelatedByUserId from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getTicketsRelatedByUserIdJoinTicketType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTicketsRelatedByUserId === null) {
			if ($this->isNew()) {
				$this->collTicketsRelatedByUserId = array();
			} else {

				$criteria->add(TicketPeer::USER_ID, $this->id);

				$this->collTicketsRelatedByUserId = TicketPeer::doSelectJoinTicketType($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(TicketPeer::USER_ID, $this->id);

			if (!isset($this->lastTicketRelatedByUserIdCriteria) || !$this->lastTicketRelatedByUserIdCriteria->equals($criteria)) {
				$this->collTicketsRelatedByUserId = TicketPeer::doSelectJoinTicketType($criteria, $con, $join_behavior);
			}
		}
		$this->lastTicketRelatedByUserIdCriteria = $criteria;

		return $this->collTicketsRelatedByUserId;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related TicketsRelatedByUserId from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getTicketsRelatedByUserIdJoinTicketPriority($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTicketsRelatedByUserId === null) {
			if ($this->isNew()) {
				$this->collTicketsRelatedByUserId = array();
			} else {

				$criteria->add(TicketPeer::USER_ID, $this->id);

				$this->collTicketsRelatedByUserId = TicketPeer::doSelectJoinTicketPriority($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(TicketPeer::USER_ID, $this->id);

			if (!isset($this->lastTicketRelatedByUserIdCriteria) || !$this->lastTicketRelatedByUserIdCriteria->equals($criteria)) {
				$this->collTicketsRelatedByUserId = TicketPeer::doSelectJoinTicketPriority($criteria, $con, $join_behavior);
			}
		}
		$this->lastTicketRelatedByUserIdCriteria = $criteria;

		return $this->collTicketsRelatedByUserId;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related TicketsRelatedByUserId from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getTicketsRelatedByUserIdJoinTicketResolution($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTicketsRelatedByUserId === null) {
			if ($this->isNew()) {
				$this->collTicketsRelatedByUserId = array();
			} else {

				$criteria->add(TicketPeer::USER_ID, $this->id);

				$this->collTicketsRelatedByUserId = TicketPeer::doSelectJoinTicketResolution($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(TicketPeer::USER_ID, $this->id);

			if (!isset($this->lastTicketRelatedByUserIdCriteria) || !$this->lastTicketRelatedByUserIdCriteria->equals($criteria)) {
				$this->collTicketsRelatedByUserId = TicketPeer::doSelectJoinTicketResolution($criteria, $con, $join_behavior);
			}
		}
		$this->lastTicketRelatedByUserIdCriteria = $criteria;

		return $this->collTicketsRelatedByUserId;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related TicketsRelatedByUserId from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getTicketsRelatedByUserIdJoinTicketResolveAs($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTicketsRelatedByUserId === null) {
			if ($this->isNew()) {
				$this->collTicketsRelatedByUserId = array();
			} else {

				$criteria->add(TicketPeer::USER_ID, $this->id);

				$this->collTicketsRelatedByUserId = TicketPeer::doSelectJoinTicketResolveAs($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(TicketPeer::USER_ID, $this->id);

			if (!isset($this->lastTicketRelatedByUserIdCriteria) || !$this->lastTicketRelatedByUserIdCriteria->equals($criteria)) {
				$this->collTicketsRelatedByUserId = TicketPeer::doSelectJoinTicketResolveAs($criteria, $con, $join_behavior);
			}
		}
		$this->lastTicketRelatedByUserIdCriteria = $criteria;

		return $this->collTicketsRelatedByUserId;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related TicketsRelatedByUserId from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getTicketsRelatedByUserIdJoinTicketMilestone($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTicketsRelatedByUserId === null) {
			if ($this->isNew()) {
				$this->collTicketsRelatedByUserId = array();
			} else {

				$criteria->add(TicketPeer::USER_ID, $this->id);

				$this->collTicketsRelatedByUserId = TicketPeer::doSelectJoinTicketMilestone($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(TicketPeer::USER_ID, $this->id);

			if (!isset($this->lastTicketRelatedByUserIdCriteria) || !$this->lastTicketRelatedByUserIdCriteria->equals($criteria)) {
				$this->collTicketsRelatedByUserId = TicketPeer::doSelectJoinTicketMilestone($criteria, $con, $join_behavior);
			}
		}
		$this->lastTicketRelatedByUserIdCriteria = $criteria;

		return $this->collTicketsRelatedByUserId;
	}

	/**
	 * Clears out the collTicketsRelatedByOwnerId collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTicketsRelatedByOwnerId()
	 */
	public function clearTicketsRelatedByOwnerId()
	{
		$this->collTicketsRelatedByOwnerId = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTicketsRelatedByOwnerId collection (array).
	 *
	 * By default this just sets the collTicketsRelatedByOwnerId collection to an empty array (like clearcollTicketsRelatedByOwnerId());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initTicketsRelatedByOwnerId()
	{
		$this->collTicketsRelatedByOwnerId = array();
	}

	/**
	 * Gets an array of Ticket objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related TicketsRelatedByOwnerId from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array Ticket[]
	 * @throws     PropelException
	 */
	public function getTicketsRelatedByOwnerId($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTicketsRelatedByOwnerId === null) {
			if ($this->isNew()) {
			   $this->collTicketsRelatedByOwnerId = array();
			} else {

				$criteria->add(TicketPeer::OWNER_ID, $this->id);

				TicketPeer::addSelectColumns($criteria);
				$this->collTicketsRelatedByOwnerId = TicketPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(TicketPeer::OWNER_ID, $this->id);

				TicketPeer::addSelectColumns($criteria);
				if (!isset($this->lastTicketRelatedByOwnerIdCriteria) || !$this->lastTicketRelatedByOwnerIdCriteria->equals($criteria)) {
					$this->collTicketsRelatedByOwnerId = TicketPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTicketRelatedByOwnerIdCriteria = $criteria;
		return $this->collTicketsRelatedByOwnerId;
	}

	/**
	 * Returns the number of related Ticket objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Ticket objects.
	 * @throws     PropelException
	 */
	public function countTicketsRelatedByOwnerId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collTicketsRelatedByOwnerId === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(TicketPeer::OWNER_ID, $this->id);

				$count = TicketPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(TicketPeer::OWNER_ID, $this->id);

				if (!isset($this->lastTicketRelatedByOwnerIdCriteria) || !$this->lastTicketRelatedByOwnerIdCriteria->equals($criteria)) {
					$count = TicketPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collTicketsRelatedByOwnerId);
				}
			} else {
				$count = count($this->collTicketsRelatedByOwnerId);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a Ticket object to this object
	 * through the Ticket foreign key attribute.
	 *
	 * @param      Ticket $l Ticket
	 * @return     void
	 * @throws     PropelException
	 */
	public function addTicketRelatedByOwnerId(Ticket $l)
	{
		if ($this->collTicketsRelatedByOwnerId === null) {
			$this->initTicketsRelatedByOwnerId();
		}
		if (!in_array($l, $this->collTicketsRelatedByOwnerId, true)) { // only add it if the **same** object is not already associated
			array_push($this->collTicketsRelatedByOwnerId, $l);
			$l->setsfGuardUserRelatedByOwnerId($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related TicketsRelatedByOwnerId from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getTicketsRelatedByOwnerIdJoinComponent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTicketsRelatedByOwnerId === null) {
			if ($this->isNew()) {
				$this->collTicketsRelatedByOwnerId = array();
			} else {

				$criteria->add(TicketPeer::OWNER_ID, $this->id);

				$this->collTicketsRelatedByOwnerId = TicketPeer::doSelectJoinComponent($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(TicketPeer::OWNER_ID, $this->id);

			if (!isset($this->lastTicketRelatedByOwnerIdCriteria) || !$this->lastTicketRelatedByOwnerIdCriteria->equals($criteria)) {
				$this->collTicketsRelatedByOwnerId = TicketPeer::doSelectJoinComponent($criteria, $con, $join_behavior);
			}
		}
		$this->lastTicketRelatedByOwnerIdCriteria = $criteria;

		return $this->collTicketsRelatedByOwnerId;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related TicketsRelatedByOwnerId from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getTicketsRelatedByOwnerIdJoinTicketType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTicketsRelatedByOwnerId === null) {
			if ($this->isNew()) {
				$this->collTicketsRelatedByOwnerId = array();
			} else {

				$criteria->add(TicketPeer::OWNER_ID, $this->id);

				$this->collTicketsRelatedByOwnerId = TicketPeer::doSelectJoinTicketType($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(TicketPeer::OWNER_ID, $this->id);

			if (!isset($this->lastTicketRelatedByOwnerIdCriteria) || !$this->lastTicketRelatedByOwnerIdCriteria->equals($criteria)) {
				$this->collTicketsRelatedByOwnerId = TicketPeer::doSelectJoinTicketType($criteria, $con, $join_behavior);
			}
		}
		$this->lastTicketRelatedByOwnerIdCriteria = $criteria;

		return $this->collTicketsRelatedByOwnerId;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related TicketsRelatedByOwnerId from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getTicketsRelatedByOwnerIdJoinTicketPriority($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTicketsRelatedByOwnerId === null) {
			if ($this->isNew()) {
				$this->collTicketsRelatedByOwnerId = array();
			} else {

				$criteria->add(TicketPeer::OWNER_ID, $this->id);

				$this->collTicketsRelatedByOwnerId = TicketPeer::doSelectJoinTicketPriority($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(TicketPeer::OWNER_ID, $this->id);

			if (!isset($this->lastTicketRelatedByOwnerIdCriteria) || !$this->lastTicketRelatedByOwnerIdCriteria->equals($criteria)) {
				$this->collTicketsRelatedByOwnerId = TicketPeer::doSelectJoinTicketPriority($criteria, $con, $join_behavior);
			}
		}
		$this->lastTicketRelatedByOwnerIdCriteria = $criteria;

		return $this->collTicketsRelatedByOwnerId;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related TicketsRelatedByOwnerId from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getTicketsRelatedByOwnerIdJoinTicketResolution($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTicketsRelatedByOwnerId === null) {
			if ($this->isNew()) {
				$this->collTicketsRelatedByOwnerId = array();
			} else {

				$criteria->add(TicketPeer::OWNER_ID, $this->id);

				$this->collTicketsRelatedByOwnerId = TicketPeer::doSelectJoinTicketResolution($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(TicketPeer::OWNER_ID, $this->id);

			if (!isset($this->lastTicketRelatedByOwnerIdCriteria) || !$this->lastTicketRelatedByOwnerIdCriteria->equals($criteria)) {
				$this->collTicketsRelatedByOwnerId = TicketPeer::doSelectJoinTicketResolution($criteria, $con, $join_behavior);
			}
		}
		$this->lastTicketRelatedByOwnerIdCriteria = $criteria;

		return $this->collTicketsRelatedByOwnerId;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related TicketsRelatedByOwnerId from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getTicketsRelatedByOwnerIdJoinTicketResolveAs($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTicketsRelatedByOwnerId === null) {
			if ($this->isNew()) {
				$this->collTicketsRelatedByOwnerId = array();
			} else {

				$criteria->add(TicketPeer::OWNER_ID, $this->id);

				$this->collTicketsRelatedByOwnerId = TicketPeer::doSelectJoinTicketResolveAs($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(TicketPeer::OWNER_ID, $this->id);

			if (!isset($this->lastTicketRelatedByOwnerIdCriteria) || !$this->lastTicketRelatedByOwnerIdCriteria->equals($criteria)) {
				$this->collTicketsRelatedByOwnerId = TicketPeer::doSelectJoinTicketResolveAs($criteria, $con, $join_behavior);
			}
		}
		$this->lastTicketRelatedByOwnerIdCriteria = $criteria;

		return $this->collTicketsRelatedByOwnerId;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related TicketsRelatedByOwnerId from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getTicketsRelatedByOwnerIdJoinTicketMilestone($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTicketsRelatedByOwnerId === null) {
			if ($this->isNew()) {
				$this->collTicketsRelatedByOwnerId = array();
			} else {

				$criteria->add(TicketPeer::OWNER_ID, $this->id);

				$this->collTicketsRelatedByOwnerId = TicketPeer::doSelectJoinTicketMilestone($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(TicketPeer::OWNER_ID, $this->id);

			if (!isset($this->lastTicketRelatedByOwnerIdCriteria) || !$this->lastTicketRelatedByOwnerIdCriteria->equals($criteria)) {
				$this->collTicketsRelatedByOwnerId = TicketPeer::doSelectJoinTicketMilestone($criteria, $con, $join_behavior);
			}
		}
		$this->lastTicketRelatedByOwnerIdCriteria = $criteria;

		return $this->collTicketsRelatedByOwnerId;
	}

	/**
	 * Clears out the collTicketComments collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTicketComments()
	 */
	public function clearTicketComments()
	{
		$this->collTicketComments = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTicketComments collection (array).
	 *
	 * By default this just sets the collTicketComments collection to an empty array (like clearcollTicketComments());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initTicketComments()
	{
		$this->collTicketComments = array();
	}

	/**
	 * Gets an array of TicketComment objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related TicketComments from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array TicketComment[]
	 * @throws     PropelException
	 */
	public function getTicketComments($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTicketComments === null) {
			if ($this->isNew()) {
			   $this->collTicketComments = array();
			} else {

				$criteria->add(TicketCommentPeer::USER_ID, $this->id);

				TicketCommentPeer::addSelectColumns($criteria);
				$this->collTicketComments = TicketCommentPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(TicketCommentPeer::USER_ID, $this->id);

				TicketCommentPeer::addSelectColumns($criteria);
				if (!isset($this->lastTicketCommentCriteria) || !$this->lastTicketCommentCriteria->equals($criteria)) {
					$this->collTicketComments = TicketCommentPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTicketCommentCriteria = $criteria;
		return $this->collTicketComments;
	}

	/**
	 * Returns the number of related TicketComment objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related TicketComment objects.
	 * @throws     PropelException
	 */
	public function countTicketComments(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collTicketComments === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(TicketCommentPeer::USER_ID, $this->id);

				$count = TicketCommentPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(TicketCommentPeer::USER_ID, $this->id);

				if (!isset($this->lastTicketCommentCriteria) || !$this->lastTicketCommentCriteria->equals($criteria)) {
					$count = TicketCommentPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collTicketComments);
				}
			} else {
				$count = count($this->collTicketComments);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a TicketComment object to this object
	 * through the TicketComment foreign key attribute.
	 *
	 * @param      TicketComment $l TicketComment
	 * @return     void
	 * @throws     PropelException
	 */
	public function addTicketComment(TicketComment $l)
	{
		if ($this->collTicketComments === null) {
			$this->initTicketComments();
		}
		if (!in_array($l, $this->collTicketComments, true)) { // only add it if the **same** object is not already associated
			array_push($this->collTicketComments, $l);
			$l->setsfGuardUser($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related TicketComments from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getTicketCommentsJoinTicket($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTicketComments === null) {
			if ($this->isNew()) {
				$this->collTicketComments = array();
			} else {

				$criteria->add(TicketCommentPeer::USER_ID, $this->id);

				$this->collTicketComments = TicketCommentPeer::doSelectJoinTicket($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(TicketCommentPeer::USER_ID, $this->id);

			if (!isset($this->lastTicketCommentCriteria) || !$this->lastTicketCommentCriteria->equals($criteria)) {
				$this->collTicketComments = TicketCommentPeer::doSelectJoinTicket($criteria, $con, $join_behavior);
			}
		}
		$this->lastTicketCommentCriteria = $criteria;

		return $this->collTicketComments;
	}

	/**
	 * Clears out the collChangelogs collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addChangelogs()
	 */
	public function clearChangelogs()
	{
		$this->collChangelogs = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collChangelogs collection (array).
	 *
	 * By default this just sets the collChangelogs collection to an empty array (like clearcollChangelogs());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initChangelogs()
	{
		$this->collChangelogs = array();
	}

	/**
	 * Gets an array of Changelog objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related Changelogs from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array Changelog[]
	 * @throws     PropelException
	 */
	public function getChangelogs($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collChangelogs === null) {
			if ($this->isNew()) {
			   $this->collChangelogs = array();
			} else {

				$criteria->add(ChangelogPeer::USER_ID, $this->id);

				ChangelogPeer::addSelectColumns($criteria);
				$this->collChangelogs = ChangelogPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(ChangelogPeer::USER_ID, $this->id);

				ChangelogPeer::addSelectColumns($criteria);
				if (!isset($this->lastChangelogCriteria) || !$this->lastChangelogCriteria->equals($criteria)) {
					$this->collChangelogs = ChangelogPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastChangelogCriteria = $criteria;
		return $this->collChangelogs;
	}

	/**
	 * Returns the number of related Changelog objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Changelog objects.
	 * @throws     PropelException
	 */
	public function countChangelogs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collChangelogs === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(ChangelogPeer::USER_ID, $this->id);

				$count = ChangelogPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(ChangelogPeer::USER_ID, $this->id);

				if (!isset($this->lastChangelogCriteria) || !$this->lastChangelogCriteria->equals($criteria)) {
					$count = ChangelogPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collChangelogs);
				}
			} else {
				$count = count($this->collChangelogs);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a Changelog object to this object
	 * through the Changelog foreign key attribute.
	 *
	 * @param      Changelog $l Changelog
	 * @return     void
	 * @throws     PropelException
	 */
	public function addChangelog(Changelog $l)
	{
		if ($this->collChangelogs === null) {
			$this->initChangelogs();
		}
		if (!in_array($l, $this->collChangelogs, true)) { // only add it if the **same** object is not already associated
			array_push($this->collChangelogs, $l);
			$l->setsfGuardUser($this);
		}
	}

	/**
	 * Clears out the collProjectUsers collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addProjectUsers()
	 */
	public function clearProjectUsers()
	{
		$this->collProjectUsers = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collProjectUsers collection (array).
	 *
	 * By default this just sets the collProjectUsers collection to an empty array (like clearcollProjectUsers());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initProjectUsers()
	{
		$this->collProjectUsers = array();
	}

	/**
	 * Gets an array of ProjectUser objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related ProjectUsers from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array ProjectUser[]
	 * @throws     PropelException
	 */
	public function getProjectUsers($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProjectUsers === null) {
			if ($this->isNew()) {
			   $this->collProjectUsers = array();
			} else {

				$criteria->add(ProjectUserPeer::USER_ID, $this->id);

				ProjectUserPeer::addSelectColumns($criteria);
				$this->collProjectUsers = ProjectUserPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(ProjectUserPeer::USER_ID, $this->id);

				ProjectUserPeer::addSelectColumns($criteria);
				if (!isset($this->lastProjectUserCriteria) || !$this->lastProjectUserCriteria->equals($criteria)) {
					$this->collProjectUsers = ProjectUserPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastProjectUserCriteria = $criteria;
		return $this->collProjectUsers;
	}

	/**
	 * Returns the number of related ProjectUser objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related ProjectUser objects.
	 * @throws     PropelException
	 */
	public function countProjectUsers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collProjectUsers === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(ProjectUserPeer::USER_ID, $this->id);

				$count = ProjectUserPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(ProjectUserPeer::USER_ID, $this->id);

				if (!isset($this->lastProjectUserCriteria) || !$this->lastProjectUserCriteria->equals($criteria)) {
					$count = ProjectUserPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collProjectUsers);
				}
			} else {
				$count = count($this->collProjectUsers);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a ProjectUser object to this object
	 * through the ProjectUser foreign key attribute.
	 *
	 * @param      ProjectUser $l ProjectUser
	 * @return     void
	 * @throws     PropelException
	 */
	public function addProjectUser(ProjectUser $l)
	{
		if ($this->collProjectUsers === null) {
			$this->initProjectUsers();
		}
		if (!in_array($l, $this->collProjectUsers, true)) { // only add it if the **same** object is not already associated
			array_push($this->collProjectUsers, $l);
			$l->setsfGuardUser($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related ProjectUsers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getProjectUsersJoinProject($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProjectUsers === null) {
			if ($this->isNew()) {
				$this->collProjectUsers = array();
			} else {

				$criteria->add(ProjectUserPeer::USER_ID, $this->id);

				$this->collProjectUsers = ProjectUserPeer::doSelectJoinProject($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(ProjectUserPeer::USER_ID, $this->id);

			if (!isset($this->lastProjectUserCriteria) || !$this->lastProjectUserCriteria->equals($criteria)) {
				$this->collProjectUsers = ProjectUserPeer::doSelectJoinProject($criteria, $con, $join_behavior);
			}
		}
		$this->lastProjectUserCriteria = $criteria;

		return $this->collProjectUsers;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related ProjectUsers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getProjectUsersJoinsfGuardGroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProjectUsers === null) {
			if ($this->isNew()) {
				$this->collProjectUsers = array();
			} else {

				$criteria->add(ProjectUserPeer::USER_ID, $this->id);

				$this->collProjectUsers = ProjectUserPeer::doSelectJoinsfGuardGroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(ProjectUserPeer::USER_ID, $this->id);

			if (!isset($this->lastProjectUserCriteria) || !$this->lastProjectUserCriteria->equals($criteria)) {
				$this->collProjectUsers = ProjectUserPeer::doSelectJoinsfGuardGroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastProjectUserCriteria = $criteria;

		return $this->collProjectUsers;
	}

	/**
	 * Clears out the collTimetracks collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTimetracks()
	 */
	public function clearTimetracks()
	{
		$this->collTimetracks = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTimetracks collection (array).
	 *
	 * By default this just sets the collTimetracks collection to an empty array (like clearcollTimetracks());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initTimetracks()
	{
		$this->collTimetracks = array();
	}

	/**
	 * Gets an array of Timetrack objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related Timetracks from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array Timetrack[]
	 * @throws     PropelException
	 */
	public function getTimetracks($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTimetracks === null) {
			if ($this->isNew()) {
			   $this->collTimetracks = array();
			} else {

				$criteria->add(TimetrackPeer::USER_ID, $this->id);

				TimetrackPeer::addSelectColumns($criteria);
				$this->collTimetracks = TimetrackPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(TimetrackPeer::USER_ID, $this->id);

				TimetrackPeer::addSelectColumns($criteria);
				if (!isset($this->lastTimetrackCriteria) || !$this->lastTimetrackCriteria->equals($criteria)) {
					$this->collTimetracks = TimetrackPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTimetrackCriteria = $criteria;
		return $this->collTimetracks;
	}

	/**
	 * Returns the number of related Timetrack objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Timetrack objects.
	 * @throws     PropelException
	 */
	public function countTimetracks(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collTimetracks === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(TimetrackPeer::USER_ID, $this->id);

				$count = TimetrackPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(TimetrackPeer::USER_ID, $this->id);

				if (!isset($this->lastTimetrackCriteria) || !$this->lastTimetrackCriteria->equals($criteria)) {
					$count = TimetrackPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collTimetracks);
				}
			} else {
				$count = count($this->collTimetracks);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a Timetrack object to this object
	 * through the Timetrack foreign key attribute.
	 *
	 * @param      Timetrack $l Timetrack
	 * @return     void
	 * @throws     PropelException
	 */
	public function addTimetrack(Timetrack $l)
	{
		if ($this->collTimetracks === null) {
			$this->initTimetracks();
		}
		if (!in_array($l, $this->collTimetracks, true)) { // only add it if the **same** object is not already associated
			array_push($this->collTimetracks, $l);
			$l->setsfGuardUser($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related Timetracks from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getTimetracksJoinProject($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTimetracks === null) {
			if ($this->isNew()) {
				$this->collTimetracks = array();
			} else {

				$criteria->add(TimetrackPeer::USER_ID, $this->id);

				$this->collTimetracks = TimetrackPeer::doSelectJoinProject($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(TimetrackPeer::USER_ID, $this->id);

			if (!isset($this->lastTimetrackCriteria) || !$this->lastTimetrackCriteria->equals($criteria)) {
				$this->collTimetracks = TimetrackPeer::doSelectJoinProject($criteria, $con, $join_behavior);
			}
		}
		$this->lastTimetrackCriteria = $criteria;

		return $this->collTimetracks;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related Timetracks from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getTimetracksJoinTicketMilestone($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTimetracks === null) {
			if ($this->isNew()) {
				$this->collTimetracks = array();
			} else {

				$criteria->add(TimetrackPeer::USER_ID, $this->id);

				$this->collTimetracks = TimetrackPeer::doSelectJoinTicketMilestone($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(TimetrackPeer::USER_ID, $this->id);

			if (!isset($this->lastTimetrackCriteria) || !$this->lastTimetrackCriteria->equals($criteria)) {
				$this->collTimetracks = TimetrackPeer::doSelectJoinTicketMilestone($criteria, $con, $join_behavior);
			}
		}
		$this->lastTimetrackCriteria = $criteria;

		return $this->collTimetracks;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related Timetracks from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getTimetracksJoinTicket($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTimetracks === null) {
			if ($this->isNew()) {
				$this->collTimetracks = array();
			} else {

				$criteria->add(TimetrackPeer::USER_ID, $this->id);

				$this->collTimetracks = TimetrackPeer::doSelectJoinTicket($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(TimetrackPeer::USER_ID, $this->id);

			if (!isset($this->lastTimetrackCriteria) || !$this->lastTimetrackCriteria->equals($criteria)) {
				$this->collTimetracks = TimetrackPeer::doSelectJoinTicket($criteria, $con, $join_behavior);
			}
		}
		$this->lastTimetrackCriteria = $criteria;

		return $this->collTimetracks;
	}

	/**
	 * Clears out the collFilterHistorys collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addFilterHistorys()
	 */
	public function clearFilterHistorys()
	{
		$this->collFilterHistorys = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collFilterHistorys collection (array).
	 *
	 * By default this just sets the collFilterHistorys collection to an empty array (like clearcollFilterHistorys());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initFilterHistorys()
	{
		$this->collFilterHistorys = array();
	}

	/**
	 * Gets an array of FilterHistory objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related FilterHistorys from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array FilterHistory[]
	 * @throws     PropelException
	 */
	public function getFilterHistorys($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFilterHistorys === null) {
			if ($this->isNew()) {
			   $this->collFilterHistorys = array();
			} else {

				$criteria->add(FilterHistoryPeer::USER_ID, $this->id);

				FilterHistoryPeer::addSelectColumns($criteria);
				$this->collFilterHistorys = FilterHistoryPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(FilterHistoryPeer::USER_ID, $this->id);

				FilterHistoryPeer::addSelectColumns($criteria);
				if (!isset($this->lastFilterHistoryCriteria) || !$this->lastFilterHistoryCriteria->equals($criteria)) {
					$this->collFilterHistorys = FilterHistoryPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastFilterHistoryCriteria = $criteria;
		return $this->collFilterHistorys;
	}

	/**
	 * Returns the number of related FilterHistory objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related FilterHistory objects.
	 * @throws     PropelException
	 */
	public function countFilterHistorys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collFilterHistorys === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(FilterHistoryPeer::USER_ID, $this->id);

				$count = FilterHistoryPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(FilterHistoryPeer::USER_ID, $this->id);

				if (!isset($this->lastFilterHistoryCriteria) || !$this->lastFilterHistoryCriteria->equals($criteria)) {
					$count = FilterHistoryPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collFilterHistorys);
				}
			} else {
				$count = count($this->collFilterHistorys);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a FilterHistory object to this object
	 * through the FilterHistory foreign key attribute.
	 *
	 * @param      FilterHistory $l FilterHistory
	 * @return     void
	 * @throws     PropelException
	 */
	public function addFilterHistory(FilterHistory $l)
	{
		if ($this->collFilterHistorys === null) {
			$this->initFilterHistorys();
		}
		if (!in_array($l, $this->collFilterHistorys, true)) { // only add it if the **same** object is not already associated
			array_push($this->collFilterHistorys, $l);
			$l->setsfGuardUser($this);
		}
	}

	/**
	 * Clears out the collProjectPermissions collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addProjectPermissions()
	 */
	public function clearProjectPermissions()
	{
		$this->collProjectPermissions = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collProjectPermissions collection (array).
	 *
	 * By default this just sets the collProjectPermissions collection to an empty array (like clearcollProjectPermissions());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initProjectPermissions()
	{
		$this->collProjectPermissions = array();
	}

	/**
	 * Gets an array of ProjectPermission objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related ProjectPermissions from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array ProjectPermission[]
	 * @throws     PropelException
	 */
	public function getProjectPermissions($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProjectPermissions === null) {
			if ($this->isNew()) {
			   $this->collProjectPermissions = array();
			} else {

				$criteria->add(ProjectPermissionPeer::USER_ID, $this->id);

				ProjectPermissionPeer::addSelectColumns($criteria);
				$this->collProjectPermissions = ProjectPermissionPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(ProjectPermissionPeer::USER_ID, $this->id);

				ProjectPermissionPeer::addSelectColumns($criteria);
				if (!isset($this->lastProjectPermissionCriteria) || !$this->lastProjectPermissionCriteria->equals($criteria)) {
					$this->collProjectPermissions = ProjectPermissionPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastProjectPermissionCriteria = $criteria;
		return $this->collProjectPermissions;
	}

	/**
	 * Returns the number of related ProjectPermission objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related ProjectPermission objects.
	 * @throws     PropelException
	 */
	public function countProjectPermissions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collProjectPermissions === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(ProjectPermissionPeer::USER_ID, $this->id);

				$count = ProjectPermissionPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(ProjectPermissionPeer::USER_ID, $this->id);

				if (!isset($this->lastProjectPermissionCriteria) || !$this->lastProjectPermissionCriteria->equals($criteria)) {
					$count = ProjectPermissionPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collProjectPermissions);
				}
			} else {
				$count = count($this->collProjectPermissions);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a ProjectPermission object to this object
	 * through the ProjectPermission foreign key attribute.
	 *
	 * @param      ProjectPermission $l ProjectPermission
	 * @return     void
	 * @throws     PropelException
	 */
	public function addProjectPermission(ProjectPermission $l)
	{
		if ($this->collProjectPermissions === null) {
			$this->initProjectPermissions();
		}
		if (!in_array($l, $this->collProjectPermissions, true)) { // only add it if the **same** object is not already associated
			array_push($this->collProjectPermissions, $l);
			$l->setsfGuardUser($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related ProjectPermissions from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getProjectPermissionsJoinProject($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProjectPermissions === null) {
			if ($this->isNew()) {
				$this->collProjectPermissions = array();
			} else {

				$criteria->add(ProjectPermissionPeer::USER_ID, $this->id);

				$this->collProjectPermissions = ProjectPermissionPeer::doSelectJoinProject($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(ProjectPermissionPeer::USER_ID, $this->id);

			if (!isset($this->lastProjectPermissionCriteria) || !$this->lastProjectPermissionCriteria->equals($criteria)) {
				$this->collProjectPermissions = ProjectPermissionPeer::doSelectJoinProject($criteria, $con, $join_behavior);
			}
		}
		$this->lastProjectPermissionCriteria = $criteria;

		return $this->collProjectPermissions;
	}

	/**
	 * Clears out the collafPortalStates collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addafPortalStates()
	 */
	public function clearafPortalStates()
	{
		$this->collafPortalStates = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collafPortalStates collection (array).
	 *
	 * By default this just sets the collafPortalStates collection to an empty array (like clearcollafPortalStates());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initafPortalStates()
	{
		$this->collafPortalStates = array();
	}

	/**
	 * Gets an array of afPortalState objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related afPortalStates from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array afPortalState[]
	 * @throws     PropelException
	 */
	public function getafPortalStates($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collafPortalStates === null) {
			if ($this->isNew()) {
			   $this->collafPortalStates = array();
			} else {

				$criteria->add(afPortalStatePeer::USER_ID, $this->id);

				afPortalStatePeer::addSelectColumns($criteria);
				$this->collafPortalStates = afPortalStatePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(afPortalStatePeer::USER_ID, $this->id);

				afPortalStatePeer::addSelectColumns($criteria);
				if (!isset($this->lastafPortalStateCriteria) || !$this->lastafPortalStateCriteria->equals($criteria)) {
					$this->collafPortalStates = afPortalStatePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastafPortalStateCriteria = $criteria;
		return $this->collafPortalStates;
	}

	/**
	 * Returns the number of related afPortalState objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related afPortalState objects.
	 * @throws     PropelException
	 */
	public function countafPortalStates(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collafPortalStates === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(afPortalStatePeer::USER_ID, $this->id);

				$count = afPortalStatePeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(afPortalStatePeer::USER_ID, $this->id);

				if (!isset($this->lastafPortalStateCriteria) || !$this->lastafPortalStateCriteria->equals($criteria)) {
					$count = afPortalStatePeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collafPortalStates);
				}
			} else {
				$count = count($this->collafPortalStates);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a afPortalState object to this object
	 * through the afPortalState foreign key attribute.
	 *
	 * @param      afPortalState $l afPortalState
	 * @return     void
	 * @throws     PropelException
	 */
	public function addafPortalState(afPortalState $l)
	{
		if ($this->collafPortalStates === null) {
			$this->initafPortalStates();
		}
		if (!in_array($l, $this->collafPortalStates, true)) { // only add it if the **same** object is not already associated
			array_push($this->collafPortalStates, $l);
			$l->setsfGuardUser($this);
		}
	}

	/**
	 * Clears out the collafWidgetSettings collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addafWidgetSettings()
	 */
	public function clearafWidgetSettings()
	{
		$this->collafWidgetSettings = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collafWidgetSettings collection (array).
	 *
	 * By default this just sets the collafWidgetSettings collection to an empty array (like clearcollafWidgetSettings());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initafWidgetSettings()
	{
		$this->collafWidgetSettings = array();
	}

	/**
	 * Gets an array of afWidgetSetting objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related afWidgetSettings from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array afWidgetSetting[]
	 * @throws     PropelException
	 */
	public function getafWidgetSettings($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collafWidgetSettings === null) {
			if ($this->isNew()) {
			   $this->collafWidgetSettings = array();
			} else {

				$criteria->add(afWidgetSettingPeer::USER, $this->id);

				afWidgetSettingPeer::addSelectColumns($criteria);
				$this->collafWidgetSettings = afWidgetSettingPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(afWidgetSettingPeer::USER, $this->id);

				afWidgetSettingPeer::addSelectColumns($criteria);
				if (!isset($this->lastafWidgetSettingCriteria) || !$this->lastafWidgetSettingCriteria->equals($criteria)) {
					$this->collafWidgetSettings = afWidgetSettingPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastafWidgetSettingCriteria = $criteria;
		return $this->collafWidgetSettings;
	}

	/**
	 * Returns the number of related afWidgetSetting objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related afWidgetSetting objects.
	 * @throws     PropelException
	 */
	public function countafWidgetSettings(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collafWidgetSettings === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(afWidgetSettingPeer::USER, $this->id);

				$count = afWidgetSettingPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(afWidgetSettingPeer::USER, $this->id);

				if (!isset($this->lastafWidgetSettingCriteria) || !$this->lastafWidgetSettingCriteria->equals($criteria)) {
					$count = afWidgetSettingPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collafWidgetSettings);
				}
			} else {
				$count = count($this->collafWidgetSettings);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a afWidgetSetting object to this object
	 * through the afWidgetSetting foreign key attribute.
	 *
	 * @param      afWidgetSetting $l afWidgetSetting
	 * @return     void
	 * @throws     PropelException
	 */
	public function addafWidgetSetting(afWidgetSetting $l)
	{
		if ($this->collafWidgetSettings === null) {
			$this->initafWidgetSettings();
		}
		if (!in_array($l, $this->collafWidgetSettings, true)) { // only add it if the **same** object is not already associated
			array_push($this->collafWidgetSettings, $l);
			$l->setsfGuardUser($this);
		}
	}

	/**
	 * Clears out the collafSaveFilters collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addafSaveFilters()
	 */
	public function clearafSaveFilters()
	{
		$this->collafSaveFilters = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collafSaveFilters collection (array).
	 *
	 * By default this just sets the collafSaveFilters collection to an empty array (like clearcollafSaveFilters());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initafSaveFilters()
	{
		$this->collafSaveFilters = array();
	}

	/**
	 * Gets an array of afSaveFilter objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related afSaveFilters from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array afSaveFilter[]
	 * @throws     PropelException
	 */
	public function getafSaveFilters($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collafSaveFilters === null) {
			if ($this->isNew()) {
			   $this->collafSaveFilters = array();
			} else {

				$criteria->add(afSaveFilterPeer::USER, $this->id);

				afSaveFilterPeer::addSelectColumns($criteria);
				$this->collafSaveFilters = afSaveFilterPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(afSaveFilterPeer::USER, $this->id);

				afSaveFilterPeer::addSelectColumns($criteria);
				if (!isset($this->lastafSaveFilterCriteria) || !$this->lastafSaveFilterCriteria->equals($criteria)) {
					$this->collafSaveFilters = afSaveFilterPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastafSaveFilterCriteria = $criteria;
		return $this->collafSaveFilters;
	}

	/**
	 * Returns the number of related afSaveFilter objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related afSaveFilter objects.
	 * @throws     PropelException
	 */
	public function countafSaveFilters(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collafSaveFilters === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(afSaveFilterPeer::USER, $this->id);

				$count = afSaveFilterPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(afSaveFilterPeer::USER, $this->id);

				if (!isset($this->lastafSaveFilterCriteria) || !$this->lastafSaveFilterCriteria->equals($criteria)) {
					$count = afSaveFilterPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collafSaveFilters);
				}
			} else {
				$count = count($this->collafSaveFilters);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a afSaveFilter object to this object
	 * through the afSaveFilter foreign key attribute.
	 *
	 * @param      afSaveFilter $l afSaveFilter
	 * @return     void
	 * @throws     PropelException
	 */
	public function addafSaveFilter(afSaveFilter $l)
	{
		if ($this->collafSaveFilters === null) {
			$this->initafSaveFilters();
		}
		if (!in_array($l, $this->collafSaveFilters, true)) { // only add it if the **same** object is not already associated
			array_push($this->collafSaveFilters, $l);
			$l->setsfGuardUser($this);
		}
	}

	/**
	 * Clears out the collafNotificationsRelatedByCreatedBy collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addafNotificationsRelatedByCreatedBy()
	 */
	public function clearafNotificationsRelatedByCreatedBy()
	{
		$this->collafNotificationsRelatedByCreatedBy = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collafNotificationsRelatedByCreatedBy collection (array).
	 *
	 * By default this just sets the collafNotificationsRelatedByCreatedBy collection to an empty array (like clearcollafNotificationsRelatedByCreatedBy());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initafNotificationsRelatedByCreatedBy()
	{
		$this->collafNotificationsRelatedByCreatedBy = array();
	}

	/**
	 * Gets an array of afNotification objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related afNotificationsRelatedByCreatedBy from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array afNotification[]
	 * @throws     PropelException
	 */
	public function getafNotificationsRelatedByCreatedBy($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collafNotificationsRelatedByCreatedBy === null) {
			if ($this->isNew()) {
			   $this->collafNotificationsRelatedByCreatedBy = array();
			} else {

				$criteria->add(afNotificationPeer::CREATED_BY, $this->id);

				afNotificationPeer::addSelectColumns($criteria);
				$this->collafNotificationsRelatedByCreatedBy = afNotificationPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(afNotificationPeer::CREATED_BY, $this->id);

				afNotificationPeer::addSelectColumns($criteria);
				if (!isset($this->lastafNotificationRelatedByCreatedByCriteria) || !$this->lastafNotificationRelatedByCreatedByCriteria->equals($criteria)) {
					$this->collafNotificationsRelatedByCreatedBy = afNotificationPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastafNotificationRelatedByCreatedByCriteria = $criteria;
		return $this->collafNotificationsRelatedByCreatedBy;
	}

	/**
	 * Returns the number of related afNotification objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related afNotification objects.
	 * @throws     PropelException
	 */
	public function countafNotificationsRelatedByCreatedBy(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collafNotificationsRelatedByCreatedBy === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(afNotificationPeer::CREATED_BY, $this->id);

				$count = afNotificationPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(afNotificationPeer::CREATED_BY, $this->id);

				if (!isset($this->lastafNotificationRelatedByCreatedByCriteria) || !$this->lastafNotificationRelatedByCreatedByCriteria->equals($criteria)) {
					$count = afNotificationPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collafNotificationsRelatedByCreatedBy);
				}
			} else {
				$count = count($this->collafNotificationsRelatedByCreatedBy);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a afNotification object to this object
	 * through the afNotification foreign key attribute.
	 *
	 * @param      afNotification $l afNotification
	 * @return     void
	 * @throws     PropelException
	 */
	public function addafNotificationRelatedByCreatedBy(afNotification $l)
	{
		if ($this->collafNotificationsRelatedByCreatedBy === null) {
			$this->initafNotificationsRelatedByCreatedBy();
		}
		if (!in_array($l, $this->collafNotificationsRelatedByCreatedBy, true)) { // only add it if the **same** object is not already associated
			array_push($this->collafNotificationsRelatedByCreatedBy, $l);
			$l->setsfGuardUserRelatedByCreatedBy($this);
		}
	}

	/**
	 * Clears out the collafNotificationsRelatedByCreatedFor collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addafNotificationsRelatedByCreatedFor()
	 */
	public function clearafNotificationsRelatedByCreatedFor()
	{
		$this->collafNotificationsRelatedByCreatedFor = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collafNotificationsRelatedByCreatedFor collection (array).
	 *
	 * By default this just sets the collafNotificationsRelatedByCreatedFor collection to an empty array (like clearcollafNotificationsRelatedByCreatedFor());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initafNotificationsRelatedByCreatedFor()
	{
		$this->collafNotificationsRelatedByCreatedFor = array();
	}

	/**
	 * Gets an array of afNotification objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related afNotificationsRelatedByCreatedFor from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array afNotification[]
	 * @throws     PropelException
	 */
	public function getafNotificationsRelatedByCreatedFor($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collafNotificationsRelatedByCreatedFor === null) {
			if ($this->isNew()) {
			   $this->collafNotificationsRelatedByCreatedFor = array();
			} else {

				$criteria->add(afNotificationPeer::CREATED_FOR, $this->id);

				afNotificationPeer::addSelectColumns($criteria);
				$this->collafNotificationsRelatedByCreatedFor = afNotificationPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(afNotificationPeer::CREATED_FOR, $this->id);

				afNotificationPeer::addSelectColumns($criteria);
				if (!isset($this->lastafNotificationRelatedByCreatedForCriteria) || !$this->lastafNotificationRelatedByCreatedForCriteria->equals($criteria)) {
					$this->collafNotificationsRelatedByCreatedFor = afNotificationPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastafNotificationRelatedByCreatedForCriteria = $criteria;
		return $this->collafNotificationsRelatedByCreatedFor;
	}

	/**
	 * Returns the number of related afNotification objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related afNotification objects.
	 * @throws     PropelException
	 */
	public function countafNotificationsRelatedByCreatedFor(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collafNotificationsRelatedByCreatedFor === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(afNotificationPeer::CREATED_FOR, $this->id);

				$count = afNotificationPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(afNotificationPeer::CREATED_FOR, $this->id);

				if (!isset($this->lastafNotificationRelatedByCreatedForCriteria) || !$this->lastafNotificationRelatedByCreatedForCriteria->equals($criteria)) {
					$count = afNotificationPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collafNotificationsRelatedByCreatedFor);
				}
			} else {
				$count = count($this->collafNotificationsRelatedByCreatedFor);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a afNotification object to this object
	 * through the afNotification foreign key attribute.
	 *
	 * @param      afNotification $l afNotification
	 * @return     void
	 * @throws     PropelException
	 */
	public function addafNotificationRelatedByCreatedFor(afNotification $l)
	{
		if ($this->collafNotificationsRelatedByCreatedFor === null) {
			$this->initafNotificationsRelatedByCreatedFor();
		}
		if (!in_array($l, $this->collafNotificationsRelatedByCreatedFor, true)) { // only add it if the **same** object is not already associated
			array_push($this->collafNotificationsRelatedByCreatedFor, $l);
			$l->setsfGuardUserRelatedByCreatedFor($this);
		}
	}

	/**
	 * Clears out the collafNotifiedFors collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addafNotifiedFors()
	 */
	public function clearafNotifiedFors()
	{
		$this->collafNotifiedFors = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collafNotifiedFors collection (array).
	 *
	 * By default this just sets the collafNotifiedFors collection to an empty array (like clearcollafNotifiedFors());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initafNotifiedFors()
	{
		$this->collafNotifiedFors = array();
	}

	/**
	 * Gets an array of afNotifiedFor objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related afNotifiedFors from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array afNotifiedFor[]
	 * @throws     PropelException
	 */
	public function getafNotifiedFors($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collafNotifiedFors === null) {
			if ($this->isNew()) {
			   $this->collafNotifiedFors = array();
			} else {

				$criteria->add(afNotifiedForPeer::USER, $this->id);

				afNotifiedForPeer::addSelectColumns($criteria);
				$this->collafNotifiedFors = afNotifiedForPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(afNotifiedForPeer::USER, $this->id);

				afNotifiedForPeer::addSelectColumns($criteria);
				if (!isset($this->lastafNotifiedForCriteria) || !$this->lastafNotifiedForCriteria->equals($criteria)) {
					$this->collafNotifiedFors = afNotifiedForPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastafNotifiedForCriteria = $criteria;
		return $this->collafNotifiedFors;
	}

	/**
	 * Returns the number of related afNotifiedFor objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related afNotifiedFor objects.
	 * @throws     PropelException
	 */
	public function countafNotifiedFors(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collafNotifiedFors === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(afNotifiedForPeer::USER, $this->id);

				$count = afNotifiedForPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(afNotifiedForPeer::USER, $this->id);

				if (!isset($this->lastafNotifiedForCriteria) || !$this->lastafNotifiedForCriteria->equals($criteria)) {
					$count = afNotifiedForPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collafNotifiedFors);
				}
			} else {
				$count = count($this->collafNotifiedFors);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a afNotifiedFor object to this object
	 * through the afNotifiedFor foreign key attribute.
	 *
	 * @param      afNotifiedFor $l afNotifiedFor
	 * @return     void
	 * @throws     PropelException
	 */
	public function addafNotifiedFor(afNotifiedFor $l)
	{
		if ($this->collafNotifiedFors === null) {
			$this->initafNotifiedFors();
		}
		if (!in_array($l, $this->collafNotifiedFors, true)) { // only add it if the **same** object is not already associated
			array_push($this->collafNotifiedFors, $l);
			$l->setsfGuardUser($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this sfGuardUser is new, it will return
	 * an empty collection; or if this sfGuardUser has previously
	 * been saved, it will retrieve related afNotifiedFors from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in sfGuardUser.
	 */
	public function getafNotifiedForsJoinafNotification($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collafNotifiedFors === null) {
			if ($this->isNew()) {
				$this->collafNotifiedFors = array();
			} else {

				$criteria->add(afNotifiedForPeer::USER, $this->id);

				$this->collafNotifiedFors = afNotifiedForPeer::doSelectJoinafNotification($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(afNotifiedForPeer::USER, $this->id);

			if (!isset($this->lastafNotifiedForCriteria) || !$this->lastafNotifiedForCriteria->equals($criteria)) {
				$this->collafNotifiedFors = afNotifiedForPeer::doSelectJoinafNotification($criteria, $con, $join_behavior);
			}
		}
		$this->lastafNotifiedForCriteria = $criteria;

		return $this->collafNotifiedFors;
	}

	/**
	 * Clears out the collafWidgetHelpSettingss collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addafWidgetHelpSettingss()
	 */
	public function clearafWidgetHelpSettingss()
	{
		$this->collafWidgetHelpSettingss = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collafWidgetHelpSettingss collection (array).
	 *
	 * By default this just sets the collafWidgetHelpSettingss collection to an empty array (like clearcollafWidgetHelpSettingss());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initafWidgetHelpSettingss()
	{
		$this->collafWidgetHelpSettingss = array();
	}

	/**
	 * Gets an array of afWidgetHelpSettings objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this sfGuardUser has previously been saved, it will retrieve
	 * related afWidgetHelpSettingss from storage. If this sfGuardUser is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array afWidgetHelpSettings[]
	 * @throws     PropelException
	 */
	public function getafWidgetHelpSettingss($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collafWidgetHelpSettingss === null) {
			if ($this->isNew()) {
			   $this->collafWidgetHelpSettingss = array();
			} else {

				$criteria->add(afWidgetHelpSettingsPeer::USER_ID, $this->id);

				afWidgetHelpSettingsPeer::addSelectColumns($criteria);
				$this->collafWidgetHelpSettingss = afWidgetHelpSettingsPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(afWidgetHelpSettingsPeer::USER_ID, $this->id);

				afWidgetHelpSettingsPeer::addSelectColumns($criteria);
				if (!isset($this->lastafWidgetHelpSettingsCriteria) || !$this->lastafWidgetHelpSettingsCriteria->equals($criteria)) {
					$this->collafWidgetHelpSettingss = afWidgetHelpSettingsPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastafWidgetHelpSettingsCriteria = $criteria;
		return $this->collafWidgetHelpSettingss;
	}

	/**
	 * Returns the number of related afWidgetHelpSettings objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related afWidgetHelpSettings objects.
	 * @throws     PropelException
	 */
	public function countafWidgetHelpSettingss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collafWidgetHelpSettingss === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(afWidgetHelpSettingsPeer::USER_ID, $this->id);

				$count = afWidgetHelpSettingsPeer::doCount($criteria, false, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(afWidgetHelpSettingsPeer::USER_ID, $this->id);

				if (!isset($this->lastafWidgetHelpSettingsCriteria) || !$this->lastafWidgetHelpSettingsCriteria->equals($criteria)) {
					$count = afWidgetHelpSettingsPeer::doCount($criteria, false, $con);
				} else {
					$count = count($this->collafWidgetHelpSettingss);
				}
			} else {
				$count = count($this->collafWidgetHelpSettingss);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a afWidgetHelpSettings object to this object
	 * through the afWidgetHelpSettings foreign key attribute.
	 *
	 * @param      afWidgetHelpSettings $l afWidgetHelpSettings
	 * @return     void
	 * @throws     PropelException
	 */
	public function addafWidgetHelpSettings(afWidgetHelpSettings $l)
	{
		if ($this->collafWidgetHelpSettingss === null) {
			$this->initafWidgetHelpSettingss();
		}
		if (!in_array($l, $this->collafWidgetHelpSettingss, true)) { // only add it if the **same** object is not already associated
			array_push($this->collafWidgetHelpSettingss, $l);
			$l->setsfGuardUser($this);
		}
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collsfGuardUserPermissions) {
				foreach ((array) $this->collsfGuardUserPermissions as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collsfGuardUserGroups) {
				foreach ((array) $this->collsfGuardUserGroups as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collsfGuardRememberKeys) {
				foreach ((array) $this->collsfGuardRememberKeys as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collComponents) {
				foreach ((array) $this->collComponents as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->singlesfGuardUserProfile) {
				$this->singlesfGuardUserProfile->clearAllReferences($deep);
			}
			if ($this->collTicketsRelatedByUserId) {
				foreach ((array) $this->collTicketsRelatedByUserId as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collTicketsRelatedByOwnerId) {
				foreach ((array) $this->collTicketsRelatedByOwnerId as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collTicketComments) {
				foreach ((array) $this->collTicketComments as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collChangelogs) {
				foreach ((array) $this->collChangelogs as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collProjectUsers) {
				foreach ((array) $this->collProjectUsers as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collTimetracks) {
				foreach ((array) $this->collTimetracks as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collFilterHistorys) {
				foreach ((array) $this->collFilterHistorys as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collProjectPermissions) {
				foreach ((array) $this->collProjectPermissions as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collafPortalStates) {
				foreach ((array) $this->collafPortalStates as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collafWidgetSettings) {
				foreach ((array) $this->collafWidgetSettings as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collafSaveFilters) {
				foreach ((array) $this->collafSaveFilters as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collafNotificationsRelatedByCreatedBy) {
				foreach ((array) $this->collafNotificationsRelatedByCreatedBy as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collafNotificationsRelatedByCreatedFor) {
				foreach ((array) $this->collafNotificationsRelatedByCreatedFor as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collafNotifiedFors) {
				foreach ((array) $this->collafNotifiedFors as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collafWidgetHelpSettingss) {
				foreach ((array) $this->collafWidgetHelpSettingss as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collsfGuardUserPermissions = null;
		$this->collsfGuardUserGroups = null;
		$this->collsfGuardRememberKeys = null;
		$this->collComponents = null;
		$this->singlesfGuardUserProfile = null;
		$this->collTicketsRelatedByUserId = null;
		$this->collTicketsRelatedByOwnerId = null;
		$this->collTicketComments = null;
		$this->collChangelogs = null;
		$this->collProjectUsers = null;
		$this->collTimetracks = null;
		$this->collFilterHistorys = null;
		$this->collProjectPermissions = null;
		$this->collafPortalStates = null;
		$this->collafWidgetSettings = null;
		$this->collafSaveFilters = null;
		$this->collafNotificationsRelatedByCreatedBy = null;
		$this->collafNotificationsRelatedByCreatedFor = null;
		$this->collafNotifiedFors = null;
		$this->collafWidgetHelpSettingss = null;
	}

	// symfony_behaviors behavior
	
	/**
	 * Calls methods defined via {@link sfMixer}.
	 */
	public function __call($method, $arguments)
	{
	  if (!$callable = sfMixer::getCallable('BasesfGuardUser:'.$method))
	  {
	    throw new sfException(sprintf('Call to undefined method BasesfGuardUser::%s', $method));
	  }
	
	  array_unshift($arguments, $this);
	
	  return call_user_func_array($callable, $arguments);
	}

} // BasesfGuardUser
