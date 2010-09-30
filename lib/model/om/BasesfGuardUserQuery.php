<?php


/**
 * Base class that represents a query for the 'sf_guard_user' table.
 *
 * 
 *
 * @method     sfGuardUserQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     sfGuardUserQuery orderByUsername($order = Criteria::ASC) Order by the username column
 * @method     sfGuardUserQuery orderByAlgorithm($order = Criteria::ASC) Order by the algorithm column
 * @method     sfGuardUserQuery orderBySalt($order = Criteria::ASC) Order by the salt column
 * @method     sfGuardUserQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method     sfGuardUserQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     sfGuardUserQuery orderByLastLogin($order = Criteria::ASC) Order by the last_login column
 * @method     sfGuardUserQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     sfGuardUserQuery orderByIsSuperAdmin($order = Criteria::ASC) Order by the is_super_admin column
 *
 * @method     sfGuardUserQuery groupById() Group by the id column
 * @method     sfGuardUserQuery groupByUsername() Group by the username column
 * @method     sfGuardUserQuery groupByAlgorithm() Group by the algorithm column
 * @method     sfGuardUserQuery groupBySalt() Group by the salt column
 * @method     sfGuardUserQuery groupByPassword() Group by the password column
 * @method     sfGuardUserQuery groupByCreatedAt() Group by the created_at column
 * @method     sfGuardUserQuery groupByLastLogin() Group by the last_login column
 * @method     sfGuardUserQuery groupByIsActive() Group by the is_active column
 * @method     sfGuardUserQuery groupByIsSuperAdmin() Group by the is_super_admin column
 *
 * @method     sfGuardUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     sfGuardUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     sfGuardUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     sfGuardUserQuery leftJoinsfGuardUserPermission($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardUserPermission relation
 * @method     sfGuardUserQuery rightJoinsfGuardUserPermission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardUserPermission relation
 * @method     sfGuardUserQuery innerJoinsfGuardUserPermission($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardUserPermission relation
 *
 * @method     sfGuardUserQuery leftJoinsfGuardUserGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardUserGroup relation
 * @method     sfGuardUserQuery rightJoinsfGuardUserGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardUserGroup relation
 * @method     sfGuardUserQuery innerJoinsfGuardUserGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardUserGroup relation
 *
 * @method     sfGuardUserQuery leftJoinsfGuardRememberKey($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardRememberKey relation
 * @method     sfGuardUserQuery rightJoinsfGuardRememberKey($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardRememberKey relation
 * @method     sfGuardUserQuery innerJoinsfGuardRememberKey($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardRememberKey relation
 *
 * @method     sfGuardUserQuery leftJoinComponent($relationAlias = null) Adds a LEFT JOIN clause to the query using the Component relation
 * @method     sfGuardUserQuery rightJoinComponent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Component relation
 * @method     sfGuardUserQuery innerJoinComponent($relationAlias = null) Adds a INNER JOIN clause to the query using the Component relation
 *
 * @method     sfGuardUserQuery leftJoinsfGuardUserProfile($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardUserProfile relation
 * @method     sfGuardUserQuery rightJoinsfGuardUserProfile($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardUserProfile relation
 * @method     sfGuardUserQuery innerJoinsfGuardUserProfile($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardUserProfile relation
 *
 * @method     sfGuardUserQuery leftJoinTicketRelatedByUserId($relationAlias = null) Adds a LEFT JOIN clause to the query using the TicketRelatedByUserId relation
 * @method     sfGuardUserQuery rightJoinTicketRelatedByUserId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TicketRelatedByUserId relation
 * @method     sfGuardUserQuery innerJoinTicketRelatedByUserId($relationAlias = null) Adds a INNER JOIN clause to the query using the TicketRelatedByUserId relation
 *
 * @method     sfGuardUserQuery leftJoinTicketRelatedByOwnerId($relationAlias = null) Adds a LEFT JOIN clause to the query using the TicketRelatedByOwnerId relation
 * @method     sfGuardUserQuery rightJoinTicketRelatedByOwnerId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TicketRelatedByOwnerId relation
 * @method     sfGuardUserQuery innerJoinTicketRelatedByOwnerId($relationAlias = null) Adds a INNER JOIN clause to the query using the TicketRelatedByOwnerId relation
 *
 * @method     sfGuardUserQuery leftJoinTicketComment($relationAlias = null) Adds a LEFT JOIN clause to the query using the TicketComment relation
 * @method     sfGuardUserQuery rightJoinTicketComment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TicketComment relation
 * @method     sfGuardUserQuery innerJoinTicketComment($relationAlias = null) Adds a INNER JOIN clause to the query using the TicketComment relation
 *
 * @method     sfGuardUserQuery leftJoinChangelog($relationAlias = null) Adds a LEFT JOIN clause to the query using the Changelog relation
 * @method     sfGuardUserQuery rightJoinChangelog($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Changelog relation
 * @method     sfGuardUserQuery innerJoinChangelog($relationAlias = null) Adds a INNER JOIN clause to the query using the Changelog relation
 *
 * @method     sfGuardUserQuery leftJoinProjectUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the ProjectUser relation
 * @method     sfGuardUserQuery rightJoinProjectUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ProjectUser relation
 * @method     sfGuardUserQuery innerJoinProjectUser($relationAlias = null) Adds a INNER JOIN clause to the query using the ProjectUser relation
 *
 * @method     sfGuardUserQuery leftJoinTimetrack($relationAlias = null) Adds a LEFT JOIN clause to the query using the Timetrack relation
 * @method     sfGuardUserQuery rightJoinTimetrack($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Timetrack relation
 * @method     sfGuardUserQuery innerJoinTimetrack($relationAlias = null) Adds a INNER JOIN clause to the query using the Timetrack relation
 *
 * @method     sfGuardUserQuery leftJoinFilterHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the FilterHistory relation
 * @method     sfGuardUserQuery rightJoinFilterHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FilterHistory relation
 * @method     sfGuardUserQuery innerJoinFilterHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the FilterHistory relation
 *
 * @method     sfGuardUserQuery leftJoinProjectPermission($relationAlias = null) Adds a LEFT JOIN clause to the query using the ProjectPermission relation
 * @method     sfGuardUserQuery rightJoinProjectPermission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ProjectPermission relation
 * @method     sfGuardUserQuery innerJoinProjectPermission($relationAlias = null) Adds a INNER JOIN clause to the query using the ProjectPermission relation
 *
 * @method     sfGuardUserQuery leftJoinafPortalState($relationAlias = null) Adds a LEFT JOIN clause to the query using the afPortalState relation
 * @method     sfGuardUserQuery rightJoinafPortalState($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afPortalState relation
 * @method     sfGuardUserQuery innerJoinafPortalState($relationAlias = null) Adds a INNER JOIN clause to the query using the afPortalState relation
 *
 * @method     sfGuardUserQuery leftJoinafWidgetSetting($relationAlias = null) Adds a LEFT JOIN clause to the query using the afWidgetSetting relation
 * @method     sfGuardUserQuery rightJoinafWidgetSetting($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afWidgetSetting relation
 * @method     sfGuardUserQuery innerJoinafWidgetSetting($relationAlias = null) Adds a INNER JOIN clause to the query using the afWidgetSetting relation
 *
 * @method     sfGuardUserQuery leftJoinafSaveFilter($relationAlias = null) Adds a LEFT JOIN clause to the query using the afSaveFilter relation
 * @method     sfGuardUserQuery rightJoinafSaveFilter($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afSaveFilter relation
 * @method     sfGuardUserQuery innerJoinafSaveFilter($relationAlias = null) Adds a INNER JOIN clause to the query using the afSaveFilter relation
 *
 * @method     sfGuardUserQuery leftJoinafNotificationRelatedByCreatedBy($relationAlias = null) Adds a LEFT JOIN clause to the query using the afNotificationRelatedByCreatedBy relation
 * @method     sfGuardUserQuery rightJoinafNotificationRelatedByCreatedBy($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afNotificationRelatedByCreatedBy relation
 * @method     sfGuardUserQuery innerJoinafNotificationRelatedByCreatedBy($relationAlias = null) Adds a INNER JOIN clause to the query using the afNotificationRelatedByCreatedBy relation
 *
 * @method     sfGuardUserQuery leftJoinafNotificationRelatedByCreatedFor($relationAlias = null) Adds a LEFT JOIN clause to the query using the afNotificationRelatedByCreatedFor relation
 * @method     sfGuardUserQuery rightJoinafNotificationRelatedByCreatedFor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afNotificationRelatedByCreatedFor relation
 * @method     sfGuardUserQuery innerJoinafNotificationRelatedByCreatedFor($relationAlias = null) Adds a INNER JOIN clause to the query using the afNotificationRelatedByCreatedFor relation
 *
 * @method     sfGuardUserQuery leftJoinafNotifiedFor($relationAlias = null) Adds a LEFT JOIN clause to the query using the afNotifiedFor relation
 * @method     sfGuardUserQuery rightJoinafNotifiedFor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afNotifiedFor relation
 * @method     sfGuardUserQuery innerJoinafNotifiedFor($relationAlias = null) Adds a INNER JOIN clause to the query using the afNotifiedFor relation
 *
 * @method     sfGuardUserQuery leftJoinafWidgetHelpSettings($relationAlias = null) Adds a LEFT JOIN clause to the query using the afWidgetHelpSettings relation
 * @method     sfGuardUserQuery rightJoinafWidgetHelpSettings($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afWidgetHelpSettings relation
 * @method     sfGuardUserQuery innerJoinafWidgetHelpSettings($relationAlias = null) Adds a INNER JOIN clause to the query using the afWidgetHelpSettings relation
 *
 * @method     sfGuardUser findOne(PropelPDO $con = null) Return the first sfGuardUser matching the query
 * @method     sfGuardUser findOneOrCreate(PropelPDO $con = null) Return the first sfGuardUser matching the query, or a new sfGuardUser object populated from the query conditions when no match is found
 *
 * @method     sfGuardUser findOneById(int $id) Return the first sfGuardUser filtered by the id column
 * @method     sfGuardUser findOneByUsername(string $username) Return the first sfGuardUser filtered by the username column
 * @method     sfGuardUser findOneByAlgorithm(string $algorithm) Return the first sfGuardUser filtered by the algorithm column
 * @method     sfGuardUser findOneBySalt(string $salt) Return the first sfGuardUser filtered by the salt column
 * @method     sfGuardUser findOneByPassword(string $password) Return the first sfGuardUser filtered by the password column
 * @method     sfGuardUser findOneByCreatedAt(string $created_at) Return the first sfGuardUser filtered by the created_at column
 * @method     sfGuardUser findOneByLastLogin(string $last_login) Return the first sfGuardUser filtered by the last_login column
 * @method     sfGuardUser findOneByIsActive(boolean $is_active) Return the first sfGuardUser filtered by the is_active column
 * @method     sfGuardUser findOneByIsSuperAdmin(boolean $is_super_admin) Return the first sfGuardUser filtered by the is_super_admin column
 *
 * @method     array findById(int $id) Return sfGuardUser objects filtered by the id column
 * @method     array findByUsername(string $username) Return sfGuardUser objects filtered by the username column
 * @method     array findByAlgorithm(string $algorithm) Return sfGuardUser objects filtered by the algorithm column
 * @method     array findBySalt(string $salt) Return sfGuardUser objects filtered by the salt column
 * @method     array findByPassword(string $password) Return sfGuardUser objects filtered by the password column
 * @method     array findByCreatedAt(string $created_at) Return sfGuardUser objects filtered by the created_at column
 * @method     array findByLastLogin(string $last_login) Return sfGuardUser objects filtered by the last_login column
 * @method     array findByIsActive(boolean $is_active) Return sfGuardUser objects filtered by the is_active column
 * @method     array findByIsSuperAdmin(boolean $is_super_admin) Return sfGuardUser objects filtered by the is_super_admin column
 *
 * @package    propel.generator.plugins.sfGuardPlugin.lib.model.om
 */
abstract class BasesfGuardUserQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasesfGuardUserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'sfGuardUser', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new sfGuardUserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    sfGuardUserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof sfGuardUserQuery) {
			return $criteria;
		}
		$query = new sfGuardUserQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    sfGuardUser|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = sfGuardUserPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(sfGuardUserPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(sfGuardUserPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(sfGuardUserPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the username column
	 * 
	 * @param     string $username The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByUsername($username = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($username)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $username)) {
				$username = str_replace('*', '%', $username);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfGuardUserPeer::USERNAME, $username, $comparison);
	}

	/**
	 * Filter the query on the algorithm column
	 * 
	 * @param     string $algorithm The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByAlgorithm($algorithm = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($algorithm)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $algorithm)) {
				$algorithm = str_replace('*', '%', $algorithm);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfGuardUserPeer::ALGORITHM, $algorithm, $comparison);
	}

	/**
	 * Filter the query on the salt column
	 * 
	 * @param     string $salt The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterBySalt($salt = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($salt)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $salt)) {
				$salt = str_replace('*', '%', $salt);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfGuardUserPeer::SALT, $salt, $comparison);
	}

	/**
	 * Filter the query on the password column
	 * 
	 * @param     string $password The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByPassword($password = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($password)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $password)) {
				$password = str_replace('*', '%', $password);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfGuardUserPeer::PASSWORD, $password, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(sfGuardUserPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(sfGuardUserPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfGuardUserPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the last_login column
	 * 
	 * @param     string|array $lastLogin The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByLastLogin($lastLogin = null, $comparison = null)
	{
		if (is_array($lastLogin)) {
			$useMinMax = false;
			if (isset($lastLogin['min'])) {
				$this->addUsingAlias(sfGuardUserPeer::LAST_LOGIN, $lastLogin['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastLogin['max'])) {
				$this->addUsingAlias(sfGuardUserPeer::LAST_LOGIN, $lastLogin['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfGuardUserPeer::LAST_LOGIN, $lastLogin, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     boolean|string $isActive The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_string($isActive)) {
			$is_active = in_array(strtolower($isActive), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(sfGuardUserPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the is_super_admin column
	 * 
	 * @param     boolean|string $isSuperAdmin The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByIsSuperAdmin($isSuperAdmin = null, $comparison = null)
	{
		if (is_string($isSuperAdmin)) {
			$is_super_admin = in_array(strtolower($isSuperAdmin), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(sfGuardUserPeer::IS_SUPER_ADMIN, $isSuperAdmin, $comparison);
	}

	/**
	 * Filter the query by a related sfGuardUserPermission object
	 *
	 * @param     sfGuardUserPermission $sfGuardUserPermission  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterBysfGuardUserPermission($sfGuardUserPermission, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $sfGuardUserPermission->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfGuardUserPermission relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinsfGuardUserPermission($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('sfGuardUserPermission');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'sfGuardUserPermission');
		}
		
		return $this;
	}

	/**
	 * Use the sfGuardUserPermission relation sfGuardUserPermission object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserPermissionQuery A secondary query class using the current class as primary query
	 */
	public function usesfGuardUserPermissionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinsfGuardUserPermission($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfGuardUserPermission', 'sfGuardUserPermissionQuery');
	}

	/**
	 * Filter the query by a related sfGuardUserGroup object
	 *
	 * @param     sfGuardUserGroup $sfGuardUserGroup  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterBysfGuardUserGroup($sfGuardUserGroup, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $sfGuardUserGroup->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfGuardUserGroup relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinsfGuardUserGroup($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('sfGuardUserGroup');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'sfGuardUserGroup');
		}
		
		return $this;
	}

	/**
	 * Use the sfGuardUserGroup relation sfGuardUserGroup object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserGroupQuery A secondary query class using the current class as primary query
	 */
	public function usesfGuardUserGroupQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinsfGuardUserGroup($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfGuardUserGroup', 'sfGuardUserGroupQuery');
	}

	/**
	 * Filter the query by a related sfGuardRememberKey object
	 *
	 * @param     sfGuardRememberKey $sfGuardRememberKey  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterBysfGuardRememberKey($sfGuardRememberKey, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $sfGuardRememberKey->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfGuardRememberKey relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinsfGuardRememberKey($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('sfGuardRememberKey');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'sfGuardRememberKey');
		}
		
		return $this;
	}

	/**
	 * Use the sfGuardRememberKey relation sfGuardRememberKey object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardRememberKeyQuery A secondary query class using the current class as primary query
	 */
	public function usesfGuardRememberKeyQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinsfGuardRememberKey($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfGuardRememberKey', 'sfGuardRememberKeyQuery');
	}

	/**
	 * Filter the query by a related Component object
	 *
	 * @param     Component $component  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByComponent($component, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $component->getOwnerId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Component relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinComponent($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Component');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Component');
		}
		
		return $this;
	}

	/**
	 * Use the Component relation Component object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ComponentQuery A secondary query class using the current class as primary query
	 */
	public function useComponentQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinComponent($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Component', 'ComponentQuery');
	}

	/**
	 * Filter the query by a related sfGuardUserProfile object
	 *
	 * @param     sfGuardUserProfile $sfGuardUserProfile  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterBysfGuardUserProfile($sfGuardUserProfile, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $sfGuardUserProfile->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfGuardUserProfile relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinsfGuardUserProfile($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('sfGuardUserProfile');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'sfGuardUserProfile');
		}
		
		return $this;
	}

	/**
	 * Use the sfGuardUserProfile relation sfGuardUserProfile object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserProfileQuery A secondary query class using the current class as primary query
	 */
	public function usesfGuardUserProfileQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinsfGuardUserProfile($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfGuardUserProfile', 'sfGuardUserProfileQuery');
	}

	/**
	 * Filter the query by a related Ticket object
	 *
	 * @param     Ticket $ticket  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByTicketRelatedByUserId($ticket, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $ticket->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the TicketRelatedByUserId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinTicketRelatedByUserId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('TicketRelatedByUserId');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'TicketRelatedByUserId');
		}
		
		return $this;
	}

	/**
	 * Use the TicketRelatedByUserId relation Ticket object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TicketQuery A secondary query class using the current class as primary query
	 */
	public function useTicketRelatedByUserIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinTicketRelatedByUserId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TicketRelatedByUserId', 'TicketQuery');
	}

	/**
	 * Filter the query by a related Ticket object
	 *
	 * @param     Ticket $ticket  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByTicketRelatedByOwnerId($ticket, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $ticket->getOwnerId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the TicketRelatedByOwnerId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinTicketRelatedByOwnerId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('TicketRelatedByOwnerId');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'TicketRelatedByOwnerId');
		}
		
		return $this;
	}

	/**
	 * Use the TicketRelatedByOwnerId relation Ticket object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TicketQuery A secondary query class using the current class as primary query
	 */
	public function useTicketRelatedByOwnerIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinTicketRelatedByOwnerId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TicketRelatedByOwnerId', 'TicketQuery');
	}

	/**
	 * Filter the query by a related TicketComment object
	 *
	 * @param     TicketComment $ticketComment  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByTicketComment($ticketComment, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $ticketComment->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the TicketComment relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinTicketComment($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('TicketComment');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'TicketComment');
		}
		
		return $this;
	}

	/**
	 * Use the TicketComment relation TicketComment object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TicketCommentQuery A secondary query class using the current class as primary query
	 */
	public function useTicketCommentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinTicketComment($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TicketComment', 'TicketCommentQuery');
	}

	/**
	 * Filter the query by a related Changelog object
	 *
	 * @param     Changelog $changelog  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByChangelog($changelog, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $changelog->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Changelog relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinChangelog($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Changelog');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Changelog');
		}
		
		return $this;
	}

	/**
	 * Use the Changelog relation Changelog object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ChangelogQuery A secondary query class using the current class as primary query
	 */
	public function useChangelogQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinChangelog($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Changelog', 'ChangelogQuery');
	}

	/**
	 * Filter the query by a related ProjectUser object
	 *
	 * @param     ProjectUser $projectUser  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByProjectUser($projectUser, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $projectUser->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ProjectUser relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinProjectUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ProjectUser');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'ProjectUser');
		}
		
		return $this;
	}

	/**
	 * Use the ProjectUser relation ProjectUser object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProjectUserQuery A secondary query class using the current class as primary query
	 */
	public function useProjectUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinProjectUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ProjectUser', 'ProjectUserQuery');
	}

	/**
	 * Filter the query by a related Timetrack object
	 *
	 * @param     Timetrack $timetrack  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByTimetrack($timetrack, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $timetrack->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Timetrack relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinTimetrack($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Timetrack');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Timetrack');
		}
		
		return $this;
	}

	/**
	 * Use the Timetrack relation Timetrack object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TimetrackQuery A secondary query class using the current class as primary query
	 */
	public function useTimetrackQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinTimetrack($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Timetrack', 'TimetrackQuery');
	}

	/**
	 * Filter the query by a related FilterHistory object
	 *
	 * @param     FilterHistory $filterHistory  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByFilterHistory($filterHistory, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $filterHistory->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the FilterHistory relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinFilterHistory($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('FilterHistory');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'FilterHistory');
		}
		
		return $this;
	}

	/**
	 * Use the FilterHistory relation FilterHistory object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    FilterHistoryQuery A secondary query class using the current class as primary query
	 */
	public function useFilterHistoryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinFilterHistory($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'FilterHistory', 'FilterHistoryQuery');
	}

	/**
	 * Filter the query by a related ProjectPermission object
	 *
	 * @param     ProjectPermission $projectPermission  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByProjectPermission($projectPermission, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $projectPermission->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ProjectPermission relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinProjectPermission($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ProjectPermission');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'ProjectPermission');
		}
		
		return $this;
	}

	/**
	 * Use the ProjectPermission relation ProjectPermission object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProjectPermissionQuery A secondary query class using the current class as primary query
	 */
	public function useProjectPermissionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinProjectPermission($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ProjectPermission', 'ProjectPermissionQuery');
	}

	/**
	 * Filter the query by a related afPortalState object
	 *
	 * @param     afPortalState $afPortalState  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByafPortalState($afPortalState, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $afPortalState->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the afPortalState relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinafPortalState($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('afPortalState');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'afPortalState');
		}
		
		return $this;
	}

	/**
	 * Use the afPortalState relation afPortalState object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afPortalStateQuery A secondary query class using the current class as primary query
	 */
	public function useafPortalStateQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinafPortalState($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'afPortalState', 'afPortalStateQuery');
	}

	/**
	 * Filter the query by a related afWidgetSetting object
	 *
	 * @param     afWidgetSetting $afWidgetSetting  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByafWidgetSetting($afWidgetSetting, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $afWidgetSetting->getUser(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the afWidgetSetting relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinafWidgetSetting($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('afWidgetSetting');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'afWidgetSetting');
		}
		
		return $this;
	}

	/**
	 * Use the afWidgetSetting relation afWidgetSetting object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afWidgetSettingQuery A secondary query class using the current class as primary query
	 */
	public function useafWidgetSettingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinafWidgetSetting($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'afWidgetSetting', 'afWidgetSettingQuery');
	}

	/**
	 * Filter the query by a related afSaveFilter object
	 *
	 * @param     afSaveFilter $afSaveFilter  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByafSaveFilter($afSaveFilter, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $afSaveFilter->getUser(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the afSaveFilter relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinafSaveFilter($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('afSaveFilter');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'afSaveFilter');
		}
		
		return $this;
	}

	/**
	 * Use the afSaveFilter relation afSaveFilter object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afSaveFilterQuery A secondary query class using the current class as primary query
	 */
	public function useafSaveFilterQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinafSaveFilter($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'afSaveFilter', 'afSaveFilterQuery');
	}

	/**
	 * Filter the query by a related afNotification object
	 *
	 * @param     afNotification $afNotification  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByafNotificationRelatedByCreatedBy($afNotification, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $afNotification->getCreatedBy(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the afNotificationRelatedByCreatedBy relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinafNotificationRelatedByCreatedBy($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('afNotificationRelatedByCreatedBy');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'afNotificationRelatedByCreatedBy');
		}
		
		return $this;
	}

	/**
	 * Use the afNotificationRelatedByCreatedBy relation afNotification object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afNotificationQuery A secondary query class using the current class as primary query
	 */
	public function useafNotificationRelatedByCreatedByQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinafNotificationRelatedByCreatedBy($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'afNotificationRelatedByCreatedBy', 'afNotificationQuery');
	}

	/**
	 * Filter the query by a related afNotification object
	 *
	 * @param     afNotification $afNotification  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByafNotificationRelatedByCreatedFor($afNotification, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $afNotification->getCreatedFor(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the afNotificationRelatedByCreatedFor relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinafNotificationRelatedByCreatedFor($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('afNotificationRelatedByCreatedFor');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'afNotificationRelatedByCreatedFor');
		}
		
		return $this;
	}

	/**
	 * Use the afNotificationRelatedByCreatedFor relation afNotification object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afNotificationQuery A secondary query class using the current class as primary query
	 */
	public function useafNotificationRelatedByCreatedForQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinafNotificationRelatedByCreatedFor($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'afNotificationRelatedByCreatedFor', 'afNotificationQuery');
	}

	/**
	 * Filter the query by a related afNotifiedFor object
	 *
	 * @param     afNotifiedFor $afNotifiedFor  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByafNotifiedFor($afNotifiedFor, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $afNotifiedFor->getUser(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the afNotifiedFor relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinafNotifiedFor($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('afNotifiedFor');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'afNotifiedFor');
		}
		
		return $this;
	}

	/**
	 * Use the afNotifiedFor relation afNotifiedFor object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afNotifiedForQuery A secondary query class using the current class as primary query
	 */
	public function useafNotifiedForQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinafNotifiedFor($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'afNotifiedFor', 'afNotifiedForQuery');
	}

	/**
	 * Filter the query by a related afWidgetHelpSettings object
	 *
	 * @param     afWidgetHelpSettings $afWidgetHelpSettings  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function filterByafWidgetHelpSettings($afWidgetHelpSettings, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserPeer::ID, $afWidgetHelpSettings->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the afWidgetHelpSettings relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function joinafWidgetHelpSettings($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('afWidgetHelpSettings');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'afWidgetHelpSettings');
		}
		
		return $this;
	}

	/**
	 * Use the afWidgetHelpSettings relation afWidgetHelpSettings object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afWidgetHelpSettingsQuery A secondary query class using the current class as primary query
	 */
	public function useafWidgetHelpSettingsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinafWidgetHelpSettings($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'afWidgetHelpSettings', 'afWidgetHelpSettingsQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     sfGuardUser $sfGuardUser Object to remove from the list of results
	 *
	 * @return    sfGuardUserQuery The current query, for fluid interface
	 */
	public function prune($sfGuardUser = null)
	{
		if ($sfGuardUser) {
			$this->addUsingAlias(sfGuardUserPeer::ID, $sfGuardUser->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasesfGuardUserQuery
